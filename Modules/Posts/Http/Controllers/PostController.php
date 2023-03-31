<?php

namespace Modules\Posts\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Modules\Tag\Entities\Tag;
use Modules\Page\Entities\Page;
use Modules\Posts\Entities\Post;
use Illuminate\Routing\Controller;
use Modules\Posts\Entities\Comment;
use Illuminate\Support\Facades\Storage;
use Modules\Category\Entities\Category;
use Modules\Reporter\Entities\Reporter;
use Illuminate\Contracts\Support\Renderable;
use Modules\Posts\Http\Requests\PostStoreRequest;
use Modules\Posts\Http\Requests\PostUpdateRequest;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {


    //   $posts = Post::with(['category','category.subcategory'])
    //          ->whereHas('category.subcategory')
    //          ->paginate(10);
        // return Post::all();
        // return Post::with('category')->paginate();
        $post_query = Post::query();
        // eager load author
        // $post_query->with('author:id,name');

        // load current user's post
        $post_query->ofCurrentUser();

        if (request('orderBy') === 'oldest') {
            $post_query->oldest('published_at');
        } else {
            $post_query->latest('published_at');
        }

        $posts = $post_query->paginate(25);
        return view('posts::index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $reporters = Reporter::all();
        $categories = Category::select('id', 'name')->get();
        $tags = Tag::select('name')->get();
        return view('posts::create', compact('tags', 'categories','reporters'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(PostStoreRequest $request)
    {
        // return $request->validated();
        $post =  Post::create($request->validated());

        if ($request->hasFile('thumbnail')) {
            // add thumbnail
            $post->addMediaFromRequest('thumbnail')
                ->toMediaCollection(Post::MEDIA_CONVERSION_AVATAR_THUMBNAIL);
        }
        if ($request->hasFile('image')) {
            // add thumbnail
            $post->addMediaFromRequest('image')
                ->toMediaCollection(Post::MEDIA_COLLECTION_AVATAR);
        }
        if ($request->has('tags')) {
            $tags = [];

            foreach (json_decode($request->tags, true) as $tagName) {
                $slug = Str::uniqueSlug(Tag::class, $tagName['value']);
                $tag = Tag::create(
                    [
                        'name' => $tagName['value'],
                        'slug' => $slug
                    ]
                );
                $tags[] = $tag->id;
            }
            $post->tags()->attach($tags);
        }


        return redirect()
            ->back()
            ->withSuccess('Page create successfully.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $tagNames = $post->tags()->pluck('name');

        return view('posts::show', compact('post','tagNames'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $reporters = Reporter::select('id', 'name')->get();
        $post = Post::with('tags')->findOrFail($id);
        $tags = Tag::select('id', 'name')->get();
        $categories = Category::select('id', 'name')->get();
        return view('posts::edit', compact('post', 'categories', 'tags','reporters'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
        // return $request->validated();

        $post->update($request->validated());

        // if ($request->hasFile('image')) {
        //     $post->clearMediaCollection();
        //     $post->addMediaFromRequest('image1')->usingName($post->title)->toMediaCollection('image');
        // }

        // if ($request->hasFile('thumbnail')) {
        //     $post->clearMediaCollection();
        //     $post->addMediaFromRequest('thumbnail')->usingName($post->title)->toMediaCollection('thumbnail');
        // }

        if ($request->hasFile('thumbnail')) {
            $post->clearMediaCollection();
            $post->addMediaFromRequest('thumbnail')
                ->toMediaCollection(Post::MEDIA_CONVERSION_AVATAR_THUMBNAIL);
        }
        if ($request->hasFile('image')) {
            $post->clearMediaCollection();
            $post->addMediaFromRequest('image')
                ->toMediaCollection(Post::MEDIA_COLLECTION_AVATAR);
        }

        if ($request->has('tags')) {
            $tags = [];

            foreach (json_decode($request->tags, true) as $tagName) {
                $slug = Str::uniqueSlug(Tag::class, $tagName['value']);
                $tag = Tag::updateOrCreate(
                    [
                        'name' => $tagName['value'],
                        'slug' => $slug
                    ]
                );
                $tags[] = $tag->id;
            }
            $post->tags()->sync($tags, true);
            $unusedTags = Tag::whereDoesntHave('posts')->get();
            $unusedTags->each(function ($tag) {
                $tag->delete();
            });
        }


        return redirect()
            ->back()
            ->withSuccess('Post update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Post $post)
    {
        $post->tags()->detach(); // Remove all tags associated with the post
        $post->delete(); // Delete the post record

        // Delete any unused tags
        $unusedTags = Tag::whereDoesntHave('posts')->get();
        $unusedTags->each(function ($tag) {
            $tag->delete();
        });
        return redirect()
            ->route('posts.index')
            ->withSuccess('Post delete successfully.');
    }

    public function uploadImage(Request $request)
    {
        $post = new Post();
        $post->id = 0;
        $post->exists = true;
        $image = $post->addMediaFromRequest('upload')->toMediaCollection('images');

        // Get the URL and path of the image file
        $url = $image->getUrl();
        $path = $image->getPath();
        return response()->json([
            'url' => $image->getUrl('thumb'),
            'deleteUrl' => route('deleteImage', ['id' => $image->id]),
            'filename' => $image->file_name,
            'id' => $image->id
        ]);
    }
    // public function deleteImage(Request $request, $id)
    // {
    //     // Find the media item with the given ID
    //     $media = Media::findOrFail($id);

    //     // Remove the media item from the collection and delete the file
    //     $media->collection_name = 'images';
    //     $media->delete();

    //     // Return a success response
    //     return response()->json([
    //         'success' => true
    //     ]);
    // }

}
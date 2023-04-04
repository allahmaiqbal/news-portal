<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Page\Entities\Page;
use Modules\Posts\Entities\Post;
use Modules\Category\Entities\Category;
use Modules\Users\Entities\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        //bangladesh news data
        $bangladesh_posts = Post::with(['category' => function ($query) {
            $query->select('id', 'name', 'slug');
        }])
        ->select('id', 'category_id', 'published_at', 'title', 'slug', 'content', 'post_count')
        ->whereNotNull('published_at')
        ->latest('updated_at')
        ->whereHas('category', function ($query) {
            $query->where('name', 'বাংলাদেশ');
        })
        ->take(5)
        ->get();

        // politics news data
        $politics_posts = Post::with(['category' => function ($query) {
            $query->select('id', 'name', 'slug');
        }])
        ->select('id', 'category_id', 'published_at', 'title', 'slug', 'content', 'post_count')
        ->whereNotNull('published_at')
        ->latest('updated_at')
        ->whereHas('category', function ($query) {
            $query->where('name', 'রাজনীতি');
        })
        ->take(5)
        ->get();

        //international news data
        $international_posts = Post::with(['category' => function ($query) {
            $query->select('id', 'name', 'slug');
        }])
        ->select('id', 'category_id', 'published_at', 'title', 'slug', 'content', 'post_count')
        ->whereNotNull('published_at')
        ->latest('updated_at')
        ->whereHas('category', function ($query) {
            $query->where('name', 'আন্তর্জাতিক');
        })
        ->take(5)
        ->get();

         //sports news data
        $sports_posts = Post::with(['category' => function ($query) {
            $query->select('id', 'name', 'slug');
        }])
        ->select('id', 'category_id', 'published_at', 'title', 'slug', 'content', 'post_count')
        ->whereNotNull('published_at')
        ->latest('published_at')
        ->whereHas('category', function ($query) {
            $query->where('name', 'খেলা');
        })
        ->take(5)
        ->get();

        //entertainment news data
        $entertainment_posts = Post::with(['category' => function ($query) {
            $query->select('id', 'name', 'slug');
        }])
        ->select('id', 'category_id', 'published_at', 'title', 'slug', 'content', 'post_count')
        ->whereNotNull('published_at')
        ->latest('published_at')
        ->whereHas('category', function ($query) {
            $query->where('name', 'বিনোদন');
        })
        ->take(5)
        ->get();

        // most view post
        $viewPosts = post::whereNotNull('published_at')
            ->select('id', 'category_id', 'published_at', 'title', 'slug', 'content', 'post_count')
            ->orderByDesc('post_count')
            ->get();
        //all post
        $posts = post::latest('published_at')->whereNotNull('published_at')->select('id', 'category_id', 'published_at', 'title', 'slug', 'content','post_count')->get();

        return view('dashboard::index',compact('posts',
        'viewPosts',
        'bangladesh_posts',
        'international_posts',
        'sports_posts',
        'politics_posts',
        'entertainment_posts'));
    }

    public function categoryPage($slug){

        $pages = Page::with(['category' => function($query) {
            $query->select('id', 'name', 'slug', 'page_id');
        }, 'category.posts' => function($query) {
            $query->whereNotNull('published_at')->select('id', 'category_id', 'published_at', 'title', 'slug', 'content')->latest('published_at');
        }])
        ->where('slug', $slug)
        ->firstOrFail();
        $category = $pages->category->first();
        // most view post
        $viewPosts = post::whereNotNull('published_at')
            ->select('id', 'category_id', 'published_at', 'title', 'slug', 'content', 'post_count')
            ->orderByDesc('post_count')
            ->take(5)
            ->get();

        //all latest post
        $allPosts = post::latest('published_at')->whereNotNull('published_at')->select('id', 'category_id', 'published_at', 'title', 'slug', 'content','post_count')->get();
        return view('dashboard::post.category-menu-page',compact('category','viewPosts','allPosts'));
    }

    public function newsPage($id){
        // return $slug;
     $post = Post::where('slug', $id)
         ->firstOrFail();
        $post->post_count++;
        $post->save();
        return view('dashboard::post.news-single-page',compact('post'));
    }


    public function breakingNews(){

        $allLatestPosts = post::latest('published_at')->whereNotNull('published_at')->select('id', 'category_id', 'published_at', 'title', 'slug', 'content','post_count')->get();
        return view('dashboard::post.latest-news-page',compact('allLatestPosts'));
    }


    public function viewNews(){
        $viewPosts = post::whereNotNull('published_at')
        ->select('id', 'category_id', 'published_at', 'title', 'slug', 'content', 'post_count')
        ->orderByDesc('post_count')
        ->get();
        return view('dashboard::post.view-post-page',compact('viewPosts'));
    }

}
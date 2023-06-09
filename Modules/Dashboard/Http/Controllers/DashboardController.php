<?php

namespace Modules\Dashboard\Http\Controllers;

use Share;
use Illuminate\Http\Request;
use Modules\Page\Entities\Page;
use Modules\Posts\Entities\Post;
use Modules\Users\Entities\User;
use Modules\Video\Entities\Video;
use Illuminate\Routing\Controller;
use Modules\Setting\Entities\Setting;
use Modules\Category\Entities\Category;
use Illuminate\Contracts\Support\Renderable;


class DashboardController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
    // return $data['advertise_2_img'] = Setting::query()
    //     ->key(Setting::KEY_ADVERTISE_TWO)
    //     ->first()
    //     ?->value;

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
        //all latest post
        $posts = post::latest('published_at')->whereNotNull('published_at')->select('id', 'category_id','breaking_news', 'published_at', 'title', 'slug', 'content','post_count')->get();
        //breaking news
        $breakingNews = Post::where('breaking_news', 1)
        ->whereNotNull('published_at')
        ->orderByDesc('published_at')
        ->get();
        //advertisement
        $advertiseOneUrl = Setting::where('key', Setting::KEY_ADVERTISE_ONE)->value('value');
        $advertiseTwoUrl = Setting::where('key', Setting::KEY_ADVERTISE_TWO)->value('value');
        $advertiseThreeUrl = Setting::where('key', Setting::KEY_ADVERTISE_THREE)->value('value');
        $advertiseFourUrl = Setting::where('key', Setting::KEY_ADVERTISE_FOUR)->value('value');

        //video
        $videos = Video::latest()->get();

     return view('dashboard::index',compact('posts',
        'viewPosts',
        'bangladesh_posts',
        'international_posts',
        'sports_posts',
        'politics_posts',
        'entertainment_posts',
        'breakingNews',
        'advertiseOneUrl',
        'advertiseTwoUrl',
        'advertiseThreeUrl',
        'advertiseFourUrl',
        'videos'
    ));
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
        // social medial link share
        // $shareLinks = Share::page('https://rongdhonu.tv/news/' . $post->slug, $post->title)
        $shareLinks = Share::page('http://rongdhonu.tv/news/'.$post->slug, $post->title)
        // $shareLinks=Share::page(
        //     // url('/news'),
        //     // 'here '
        //     URL::to('/news')
        //     )
        ->facebook()
        ->linkedin()
        ->whatsapp()
        ->twitter();
        // //advertisement
        $advertiseFiveUrl = Setting::where('key', Setting::KEY_ADVERTISE_FIVE)->value('value');
        $advertiseSixUrl = Setting::where('key', Setting::KEY_ADVERTISE_SIX)->value('value');
        $advertiseSevenUrl = Setting::where('key', Setting::KEY_ADVERTISE_SEVEN)->value('value');
        return view('dashboard::post.news-single-page',
        compact(
            'post',
            'advertiseFiveUrl',
            'advertiseSixUrl',
            'advertiseSevenUrl',
            'shareLinks'
        ));
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

    public function searchNews( Request $request){

        $searchData = $request->input('q');

        if (empty($searchData)) {
            $news = collect([]);
        } else {
            $news = Post::latest('published_at')
                ->whereNotNull('published_at')
                ->select('id', 'category_id', 'published_at', 'title', 'slug', 'content', 'post_count')
                ->where(function ($queryBuilder) use ($searchData) {
                    $queryBuilder->where('title', 'LIKE', '%' . $searchData . '%')
                                 ->orWhereHas('tags', function ($queryBuilder) use ($searchData) {
                                     $queryBuilder->where('name', 'LIKE', '%' . $searchData . '%');
                                 });
                })
                ->get();
        }

        return view('dashboard::post.search-post-page', compact('news','searchData'));
    }


    public function liveTv(){
        $video = Video::latest()->first();
        return view('dashboard::post.live-tv',compact('video'));

    }

}
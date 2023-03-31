<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Page\Entities\Page;
use Modules\Posts\Entities\Post;
use Modules\Users\Entities\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data = [];

        // check user has permission to see last login history
        // if (auth()->user()->can('last_login_history')) {
        //     $data['users'] = User::query()
        //         ->get();
        // }

        return view('dashboard::index')
            ->with($data);
    }

    public function categoryPage($id){
        $pages =  Page::with(['category' => function($query) {
                $query->select('id', 'name', 'slug', 'page_id');
            }, 'category.posts' => function($query) {
                $query->select('id', 'category_id', 'title',  'slug', 'content')->latest();
            }])
            ->where('slug', $id)
            ->firstOrFail();
           $category = $pages->category->first();

        return view('dashboard::post.category-menu-page',compact('category'));
    }

    public function newsPage($id){
        // return $slug;
     $post = Post::where('slug', $id)
         ->firstOrFail();
        $post->post_count++;
        $post->save();


//    return  $post = Post::with('reporter')->findOrFail($slug);
        return view('dashboard::post.news-single-page',compact('post'));
    }

}

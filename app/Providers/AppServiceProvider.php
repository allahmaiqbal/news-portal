<?php

namespace App\Providers;

use Modules\Page\Entities\Page;
use Modules\Posts\Entities\Post;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Modules\Category\Entities\Category;
use Modules\ContactUS\Entities\Contact;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //All pages
        $pages = Page::all();
        view()->share('pages',$pages);
       //Email data
        $emails = Contact::where('seen', 0)->latest()->get();
        view()->share('emails', $emails);
        //breaking news
        $latestPosts = Post::latest('published_at')->whereNotNull('published_at')->select('id', 'category_id', 'published_at', 'title', 'slug', 'content','post_count')->get();
        view()->share('latestPosts', $latestPosts);

        Paginator::useBootstrapFive();
    }
}

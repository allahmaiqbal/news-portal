<?php

namespace App\Providers;

use Modules\Page\Entities\Page;
use Modules\Posts\Entities\Post;
use Illuminate\Pagination\Paginator;
use Modules\Content\Entities\Content;
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
       //basic information

            $managingDirector = Content::where('key', Content::KEY_MANAGING_DIRECTOR
            )->value('value');
            view()->share('managingDirector', $managingDirector);

            $chiefEditor = Content::where('key', Content::KEY_CHIEF_EDITOR
            )->value('value');
            view()->share('chiefEditor', $chiefEditor);

           $sideName = Content::where('key', Content::KEY_SITE_NAME_PRIMARY
            )->value('value');
            view()->share('sideName', $sideName);

            $emailAddress= Content::where('key', Content::KEY_EMAIL_ADDRESS_PRIMARY
            )->value('value');
            view()->share('emailAddress', $emailAddress);

            $mobileNumber= Content::where('key', Content::KEY_PHONE_NUMBER_PRIMARY
            )->value('value');
            view()->share('mobileNumber', $mobileNumber);

            $address= Content::where('key', Content::KEY_ADDRESS
            )->value('value');
            view()->share('address', $address);

        Paginator::useBootstrapFive();
    }
}

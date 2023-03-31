<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Modules\Category\Entities\Category;
use Modules\ContactUS\Entities\Contact;
use Modules\Page\Entities\Page;

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

        Paginator::useBootstrapFive();
    }
}
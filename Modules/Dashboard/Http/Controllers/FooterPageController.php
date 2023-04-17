<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Setting\Entities\Setting;
use Illuminate\Contracts\Support\Renderable;
use Modules\Content\Entities\Content;

class FooterPageController extends Controller
{
  /**
   *
   */
    public function aboutUs(){
        $aboutUs = Content::where('key', Content::KEY_ABOUT_US)->value('value');
        return view('dashboard::post.about-us',compact('aboutUs'));
    }

     /**
     *
     */
    public function contactUs(){
        $site = Content::where('key', Content::KEY_SITE_NAME_PRIMARY)->value('value');
        $email = Content::where('key', Content::KEY_EMAIL_ADDRESS_PRIMARY)->value('value');
        $phone = Content::where('key', Content::KEY_PHONE_NUMBER_PRIMARY)->value('value');
        $address = Content::where('key', Content::KEY_ADDRESS)->value('value');
        return view('dashboard::post.contact-us',
        compact(
            'site',
            'email',
            'phone',
            'address',
        ));
    }

        /**
     *
     */
    public function terms(){
     $termsCondition = Content::where('key', Content::KEY_TERM_CONDITION)->value('value');
        return view('dashboard::post.terms-condition',compact('termsCondition'));
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('dashboard::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('dashboard::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}

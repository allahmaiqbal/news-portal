<?php

namespace Modules\Setting\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Content\Entities\Content;
use Modules\Setting\Entities\Setting;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\Renderable;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('setting::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('setting::create');
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
        return view('setting::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('setting::edit');
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

    public function addAdvertise()
    {
        // return  Setting::all();
       $data = [];
        // return Page::all();
       $data['advertise_1_img'] = Setting::query()
        ->key(Setting::KEY_ADVERTISE_ONE)
        ->first()
        ?->value;

        $data['advertise_2_img'] = Setting::query()
        ->key(Setting::KEY_ADVERTISE_TWO)
        ->first()
        ?->value;

        $data['advertise_3_img'] = Setting::query()
        ->key(Setting::KEY_ADVERTISE_THREE)
        ->first()
        ?->value;

        $data['advertise_4_img'] = Setting::query()
        ->key(Setting::KEY_ADVERTISE_FOUR)
        ->first()
        ?->value;

        $data['advertise_5_img'] = Setting::query()
        ->key(Setting::KEY_ADVERTISE_FIVE)
        ->first()
        ?->value;

        $data['advertise_6_img'] = Setting::query()
        ->key(Setting::KEY_ADVERTISE_SIX)
        ->first()
        ?->value;

        $data['advertise_7_img'] = Setting::query()
        ->key(Setting::KEY_ADVERTISE_SEVEN)
        ->first()
        ?->value;
    //  return $data;
    return view('advertisement::index')->with($data);
    }

    public function addAdvertiseStore(Request $request)
    {
        // return $request->all();
        $request->validate([
            'advertise_1_img' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'advertise_2_img' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'advertise_3_img' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'advertise_4_img' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'advertise_5_img' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'advertise_6_img' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'advertise_7_img' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'advertise_8_img' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        //file upload
        if ($request->hasFile('advertise_1_img')) {

            // delete old image from storage
            $oldImage = Setting::where('key', Setting::KEY_ADVERTISE_ONE)->value('value');
            if ($oldImage) {
                Storage::delete($oldImage);
            }
            $advertise_1_img = $request->file('advertise_1_img')->store('images/advertise');
            Setting::updateOrCreate([
                'key' => Setting::KEY_ADVERTISE_ONE,
            ], [
                'value' => $advertise_1_img,
            ]);

        }
        if ($request->hasFile('advertise_2_img')) {

            // delete old image from storage
            $oldImage = Setting::where('key', Setting::KEY_ADVERTISE_TWO)->value('value');
            if ($oldImage) {
                Storage::delete($oldImage);
            }

            $advertise_2_img = $request->file('advertise_2_img')->store('images/advertise');
            Setting::updateOrCreate([
                'key' => Setting::KEY_ADVERTISE_TWO,
            ], [
                'value' => $advertise_2_img,
            ]);

        }

        if ($request->hasFile('advertise_3_img')) {

            // delete old image from storage
            $oldImage = Setting::where('key', Setting::KEY_ADVERTISE_THREE)->value('value');
            if ($oldImage) {
                Storage::delete($oldImage);
            }

            $advertise_3_img = $request->file('advertise_3_img')->store('images/advertise');
            Setting::updateOrCreate([
                'key' => Setting::KEY_ADVERTISE_THREE,
            ], [
                'value' => $advertise_3_img,
            ]);

        }
        if ($request->hasFile('advertise_4_img')) {

            // delete old image from storage
            $oldImage = Setting::where('key', Setting::KEY_ADVERTISE_FOUR)->value('value');
            if ($oldImage) {
                Storage::delete($oldImage);
            }

            $advertise_4_img = $request->file('advertise_4_img')->store('images/advertise');
            Setting::updateOrCreate([
                'key' => Setting::KEY_ADVERTISE_FOUR,
            ], [
                'value' => $advertise_4_img,
            ]);
        }

        if ($request->hasFile('advertise_5_img')) {

            // delete old image from storage
            $oldImage = Setting::where('key', Setting::KEY_ADVERTISE_FIVE)->value('value');
            if ($oldImage) {
                Storage::delete($oldImage);
            }

            $advertise_5_img = $request->file('advertise_5_img')->store('images/advertise');
            Setting::updateOrCreate([
                'key' => Setting::KEY_ADVERTISE_FIVE,
            ], [
                'value' => $advertise_5_img,
            ]);
        }

        if ($request->hasFile('advertise_6_img')) {

            // delete old image from storage
            $oldImage = Setting::where('key', Setting::KEY_ADVERTISE_SIX)->value('value');
            if ($oldImage) {
                Storage::delete($oldImage);
            }

            $advertise_6_img = $request->file('advertise_6_img')->store('images/advertise');
            Setting::updateOrCreate([
                'key' => Setting::KEY_ADVERTISE_SIX,
            ], [
                'value' => $advertise_6_img,
            ]);
        }

        if ($request->hasFile('advertise_7_img')) {

            // delete old image from storage
            $oldImage = Setting::where('key', Setting::KEY_ADVERTISE_SEVEN)->value('value');
            if ($oldImage) {
                Storage::delete($oldImage);
            }

            $advertise_7_img = $request->file('advertise_7_img')->store('images/advertise');
            Setting::updateOrCreate([
                'key' => Setting::KEY_ADVERTISE_SEVEN,
            ], [
                'value' => $advertise_7_img,
            ]);
        }

        return redirect()
            ->back()
            ->withSuccess('Advertisement updated successfully.');
    }

     //Basic information
     public function basicInfo()
     {
        $data['chief_editor'] = Content::query()
        ->key(Content::KEY_CHIEF_EDITOR)
        ->first()
        ?->value;

       $data['managing_director'] = Content::query()
        ->key(Content::KEY_MANAGING_DIRECTOR)
        ->first()
        ?->value;

         $data['site_name'] = Content::query()
             ->key(Content::KEY_SITE_NAME_PRIMARY)
             ->first()
             ?->value;

         $data['email'] = Content::query()
             ->key(Content::KEY_EMAIL_ADDRESS_PRIMARY)
             ->first()
             ?->value;

         $data['phone'] = Content::query()
             ->key(Content::KEY_PHONE_NUMBER_PRIMARY)
             ->first()
             ?->value;

         $data['address'] = Content::query()
             ->key(Content::KEY_ADDRESS)
             ->first()
             ?->value;

        $data['chief_editor'] = Content::query()
             ->key(Content::KEY_CHIEF_EDITOR)
             ->first()
             ?->value;

        $data['managing_director'] = Content::query()
             ->key(Content::KEY_MANAGING_DIRECTOR)
             ->first()
             ?->value;





        //  $data['logo'] = Content::query()
        //      ->key(Content::KEY_LOGO)
        //      ->first()
        //      ?->value;

         return view('setting::setting.basic.basic-information')->with($data);
        //  return view('settings.basic.basic-info')->with($data);
     }

     public function basicInfoStore(Request $request)
     {
         // return $request->all();
         $request->validate([

            'chief_editor' => 'nullable|string',
            'managing_director' => 'nullable|string',
            'site_name' => 'nullable|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            //  'logo'=> 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
         ]);

         Content::updateOrCreate([
            'key' => Content::KEY_MANAGING_DIRECTOR,
        ], [
            'value' => $request->managing_director,
        ]);

        Content::updateOrCreate([
            'key' => Content::KEY_CHIEF_EDITOR,
        ], [
            'value' => $request->chief_editor,
        ]);

         Content::updateOrCreate([
             'key' => Content::KEY_SITE_NAME_PRIMARY,
         ], [
             'value' => $request->site_name,
         ]);

         Content::updateOrCreate([
             'key' => Content::KEY_EMAIL_ADDRESS_PRIMARY,
         ], [
             'value' => $request->email,
         ]);

         Content::updateOrCreate([
             'key' => Content::KEY_PHONE_NUMBER_PRIMARY,
         ], [
             'value' => $request->phone,
         ]);

         Content::updateOrCreate([
             'key' => Content::KEY_ADDRESS,
         ], [
             'value' => $request->address,
         ]);



        //  Content::updateOrCreate([
        //      'key' => Content::KEY_BOOKING_SENDING_EMAILS,
        //  ], [
        //      'value' => $request->booking_sending_emails,
        //  ]);

        //  if ($request->hasFile('logo')) {

        //      $logo = $request->file('logo')->store('images/logo');
        //      Content::updateOrCreate([
        //          'key' => Content::KEY_LOGO,
        //      ], [
        //          'value' => $logo,
        //      ]);

        //  }

         return redirect()
             ->back()
             ->withSuccess('Content updated successfully.');
     }

     public function footerPage(){
        // $data['contact_us'] = Content::query()
        // ->key(Content::kEY_CONTACT_US)
        // ->first()
        // ?->value;

        $data['term'] = Content::query()
        ->key(Content::KEY_TERM_CONDITION)
        ->first()
        ?->value;

       $data['about_us'] = Content::query()
        ->key(Content::KEY_ABOUT_US)
        ->first()
        ?->value;

        return view('setting::setting.footer-page.footer')->with($data);

     }

     public function footerPageStore(Request $request)
     {
        // return $request->all();
         $request->validate([

            'about_us' => 'nullable|string',
            'term_condition' => 'nullable|string',

         ]);

        Content::updateOrCreate([
            'key' => Content::KEY_ABOUT_US,
        ], [
            'value' => $request->about_us,
        ]);

         Content::updateOrCreate([
             'key' => Content::KEY_TERM_CONDITION,
         ], [
             'value' => $request->term,
         ]);


         return redirect()
             ->back()
             ->withSuccess('Content updated successfully.');
     }

}

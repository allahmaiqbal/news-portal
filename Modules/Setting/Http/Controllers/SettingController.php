<?php

namespace Modules\Setting\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Setting\Entities\Setting;

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
    //  $data = [];
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


        $data['advertise_link1'] = Setting::query()
        ->key(Setting::KEY_ADVERTISE_lINK_ONE)
        ->first()
        ?->value;

        $data['advertise_link2'] = Setting::query()
        ->key(Setting::KEY_ADVERTISE_LINK_TWO)
        ->first()
        ?->value;

        $data['advertise_link3'] = Setting::query()
        ->key(Setting::KEY_ADVERTISE_LINK_THREE)
        ->first()
        ?->value;

        $data['advertise_link4'] = Setting::query()
        ->key(Setting::KEY_ADVERTISE_LINK_FOUR)
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
            'advertise_link1' => 'nullable|string',
            'advertise_link2' => 'nullable|string',
            'advertise_link3' => 'nullable|string',
            'advertise_link4' => 'nullable|string',
        ]);

        //file upload
        if ($request->hasFile('advertise_1_img')) {

            $advertise_1_img = $request->file('advertise_1_img')->store('images/advertise');
            Setting::updateOrCreate([
                'key' => Setting::KEY_ADVERTISE_ONE,
            ], [
                'value' => $advertise_1_img,
            ]);
            Setting::updateOrCreate([
                'key' => Setting::KEY_ADVERTISE_lINK_ONE,
            ], [
                'value' => $request->advertise_link1,
            ]);
        }
        if ($request->hasFile('advertise_2_img')) {

            $advertise_2_img = $request->file('advertise_2_img')->store('images/advertise');
            Setting::updateOrCreate([
                'key' => Setting::KEY_ADVERTISE_TWO,
            ], [
                'value' => $advertise_2_img,
            ]);
            Setting::updateOrCreate([
                'key' => Setting::KEY_ADVERTISE_LINK_TWO,
            ], [
                'value' => $request->advertise_link2,
            ]);
        }
        if ($request->hasFile('advertise_3_img')) {

            $advertise_3_img = $request->file('advertise_3_img')->store('images/advertise');
            Setting::updateOrCreate([
                'key' => Setting::KEY_ADVERTISE_THREE,
            ], [
                'value' => $advertise_3_img,
            ]);

            Setting::updateOrCreate([
                'key' => Setting::KEY_ADVERTISE_LINK_THREE,
            ], [
                'value' => $request->advertise_link3,
            ]);
        }
        if ($request->hasFile('advertise_4_img')) {

            $advertise_4_img = $request->file('advertise_4_img')->store('images/advertise');
            Setting::updateOrCreate([
                'key' => Setting::KEY_ADVERTISE_FOUR,
            ], [
                'value' => $advertise_4_img,
            ]);

            Setting::updateOrCreate([
                'key' => Setting::KEY_ADVERTISE_LINK_FOUR,
            ], [
                'value' => $request->advertise_link4,
            ]);
        }

        return redirect()
            ->back()
            ->withSuccess('Content updated successfully.');
    }
}

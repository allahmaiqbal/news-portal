<?php

namespace Modules\Reporter\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Reporter\Entities\Reporter;
use Modules\Reporter\Http\Requests\ReporterStoreRequest;
use Modules\Reporter\Http\Requests\ReporterUpdateRequest;

class ReporterController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $reporters = Reporter::query()->paginate();
        return view('reporter::index',compact('reporters'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('reporter::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(ReporterStoreRequest $request )
    {
        $reporter= Reporter::create($request->validated());

        if ($request->hasFile('image')) {
         $reporter->addMediaFromRequest('image')
            ->toMediaCollection(Reporter::MEDIA_COLLECTION_AVATAR);
        }
        return redirect()
            ->back()
            ->withSuccess('Reporter create successfully.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('reporter::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $reporter = Reporter::findOrFail($id);
        return view('reporter::edit',compact('reporter'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(ReporterUpdateRequest $request, Reporter $reporter)
    {
      $reporter->update($request->validated());

        //  if ($request->hasFile('image')) {
        //     $reporter->clearMediaCollection();
        //     $reporter->addMediaFromRequest('image')
        //     ->toMediaCollection(Reporter::MEDIA_COLLECTION_AVATAR);
        // }

       if ($request->hasFile('image')) {
        $media = $reporter->getFirstMedia(Reporter::MEDIA_COLLECTION_AVATAR);
        if ($media) {
            $media->delete(); // delete the old avatar image
        }

        $reporter->addMediaFromRequest('image')
            ->toMediaCollection(Reporter::MEDIA_COLLECTION_AVATAR);
    }
            return redirect()
            ->back()
            ->withSuccess('Reporter update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Reporter $reporter)
    {
        // Remove the reporter's avatar from the media library
        $reporter->clearMediaCollection(Reporter::MEDIA_COLLECTION_AVATAR);

        // Delete the reporter from the database
        $reporter->delete();

        return redirect()
            ->route('reporters.index')
            ->withSuccess('Reporter deleted successfully.');


        // $reporter = Reporter::findOrFail($id);
        // $reporter->delete();
        //    return redirect()
        //     ->back()
        //     ->withSuccess('Reporter delete successfully.');
    }
}

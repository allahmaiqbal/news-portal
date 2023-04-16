<?php

namespace Modules\Video\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Video\Entities\Video;
use Modules\Video\Http\Requests\VideoCreateRequest;
use Modules\Video\Http\Requests\VideoUpdateRequest;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
      $videos_query = Video::query();
      $videos_query->get();
      $videos=  $videos_query->paginate(25);

        return view('video::index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('video::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(VideoCreateRequest $request)
    {
        // return $request->validated();
        Video::create($request->validated());
        return redirect()
            ->back()
            ->withSuccess('Video add successfully.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('video::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('video::edit',compact('video'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(VideoUpdateRequest $request, $id)
    {
        Video::findOrFail($id)->update($request->validated());

        return redirect()
            ->back()
            ->withSuccess('Video update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();
        return redirect()
              ->back()
              ->withSuccess('Video Delete successfully.');
    }
}
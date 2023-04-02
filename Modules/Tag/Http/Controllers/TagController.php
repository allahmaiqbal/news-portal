<?php

namespace Modules\Tag\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Tag\Entities\Tag;
use Modules\Tag\Http\Requests\TagStoreRequest;
use Modules\Tag\Http\Requests\TagUpdateRequest;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data = [];
        $tag = Tag::distinct()->get();
        $data['tag'] = $tag;
        return view('tag::index')->with($data);
        // return view('tag::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('tag::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(TagStoreRequest $request)
    {
        Tag::create($request->validated());

        return redirect()
            ->back()
            ->withSuccess('Tag create successfully.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        // $data = [];
        // $tag = Tag::findOrFail($id);
        // $data['tag'] = $tag;
        return view('tag::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $data = [];
        $tag = Tag::findOrFail($id);
        $data['tag'] = $tag;
        return view('tag::edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(TagUpdateRequest $request, $id)
    {
        // return $request->validated();
        Tag::findOrFail($id)
            ->update($request->validated());

        return redirect()
            ->back()
            ->withSuccess('Tag update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete($tag);
        return redirect()
            ->back()
            ->withSuccess('Tag delete successfully.');
    }
}

<?php

namespace Modules\Page\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Page\Entities\Page;
use Modules\Page\Http\Requests\PageStoreRequest;
use Modules\Page\Http\Requests\PageUpdateRequest;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // return Page::with(['category','category.subcategory'])->get();
        $pages = Page::query()->paginate(20);
        return view('page::index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('page::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(PageStoreRequest $request)
    {
        Page::create($request->validated());

        return redirect()
            ->back()
            ->withSuccess('Page create successfully.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('page::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('page::edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(PageUpdateRequest $request, $id)
    {
        // return $request->validated();
        Page::findOrFail($id)->update($request->validated());

        return redirect()
            ->back()
            ->withSuccess('Page update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();
        return redirect()
            ->back()
            ->withSuccess('Page delete successfully.');
    }
}

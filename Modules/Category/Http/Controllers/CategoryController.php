<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Page\Entities\Page;
use Modules\Users\Entities\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Modules\Category\Entities\Category;
use Illuminate\Contracts\Support\Renderable;
use Modules\Category\Http\Requests\CategoryStoreRequest;
use Modules\Category\Http\Requests\CategoryUpdateRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data=[];
        $categories = Category::query();
        $data['categories'] = $categories->paginate();

        return view('category::index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $pages = Page::all();
        return view('category::create',compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CategoryStoreRequest $request)
    {
        // return $request->validated();
        Category::create($request->validated());

        return redirect()
            ->back()
            ->withSuccess('Category create successfully.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('category::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $data =[];
        $category = Category::query()
            ->findOrFail($id);
        $data['category'] = $category;
        $data['pages'] = Page::all();

        return view('category::edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        $category = Category::query()
            ->findOrFail($id);

        $category->update($request->only([
            'page_id',
            'name',
            'slug',
            'description',
        ]));
        // return $request->validated();
    //   Category::findOrFail($id)->update($request->validated());

        return redirect()
            ->back()
            ->withSuccess('Category update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()
            ->back()
            ->withSuccess('Category delete successfully.');
    }
    /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        //service query
        $category_query = Category::query();
        // Search by service name
        if (request('name')) {
            $category_query->where('name', 'like', '%' . request('name') . '%');
        }
        //get all trashes services
        //  $categories = $category_query->get()->onlyTrashed()->paginate(15);
        $categories = $category_query->onlyTrashed()->paginate(15);
        //view
        // return view('admin.category.trash', compact('categories'));
        return view('category::trash', compact('categories'));
    }

    public function restore($id)
    {
        // restore by id
        Category::withTrashed()->find($id)->restore();
        // view
        return redirect()->back()->withSuccess('Category restore successfully.');
    }

    /***
     *
     */
    public function permanentDelete($id)
    {
        // Permanent delete by id
        Category::withTrashed()->find($id)->forceDelete();
        // view
        return redirect()->back()->withSuccess('Category deleted permanently.');
    }

    public function restoreOrDelete(Request $request)
    {
        // return $request->all();
        if ($request->categories != null) {
            if ($request->restore) {
                foreach ($request->categories as $category) {
                    Category::withTrashed()->find($category)->restore();
                }
                // view
                return redirect()->back()->withSuccess('Categories restored successfully.');
            } else {
                foreach ($request->categories as $category) {
                    Category::withTrashed()->find($category)->forceDelete();
                }
                // view
                return redirect()->back()->withSuccess('Categories deleted permanently.');
            }
        }

        return back()->withErrors('No category(s) has been selected.');
    }
}

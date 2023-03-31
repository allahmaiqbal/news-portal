<?php

namespace Modules\SubCategory\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Category\Entities\Category;
use Illuminate\Contracts\Support\Renderable;
use Modules\SubCategory\Entities\SubCategory;
use Modules\SubCategory\Http\Requests\SubCategoryStoreRequest;
use Modules\SubCategory\Http\Requests\SubCategoryUpdateRequest;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $subCategories = SubCategory::query()->paginate();
        return view('subcategory::index',compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $data=[];
        $categories=Category::all();
        $data['categories']=$categories;
        return view('subcategory::create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(SubCategoryStoreRequest $request)
    {
        // return $request->all();
         SubCategory::create($request->validated());

        return redirect()
            ->back()
            ->withSuccess('SubCategory create successfully.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('subcategory::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $categories =Category::all();
        $subCategory = SubCategory::findOrFail($id);
        return view('subcategory::edit',compact('subCategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(SubCategoryUpdateRequest $request, $id)
    {
        // return $request->validated();
        $subCategories = SubCategory::findOrFail($id);
        // update
        $subCategories->update($request->validated());

        return redirect()
            ->back()
            ->withSuccess('SubCategory update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $subCategories= SubCategory::findOrFail($id);
        $subCategories->delete();
         return redirect()
            ->back()
            ->withSuccess('SubCategory Delete successfully.');
    }


     /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {

        //service query
      $subCategory_query = SubCategory::query();
        // Search by service name
        if (request('name')) {
            $subCategory_query->where('name', 'like', '%' . request('name') . '%');
        }
        //get all trashes services
        //  $categories = $category_query->get()->onlyTrashed()->paginate(15);
       $subCategories = $subCategory_query->onlyTrashed()->paginate(15);
        //view
        // return view('admin.category.trash', compact('categories'));
        return view('subcategory::trash', compact('subCategories'));
    }

    public function restore($id)
    {
        // restore by id
        SubCategory::withTrashed()->find($id)->restore();
        // view
        return redirect()->back()->withSuccess('SubCategory restore successfully.');
    }

    /***
     *
     */
    public function permanentDelete($id)
    {
        // Permanent delete by id
        SubCategory::withTrashed()->find($id)->forceDelete();
        // view
        return redirect()->back()->withSuccess('SubCategory deleted permanently.');
    }

    public function restoreOrDelete(Request $request)
    {
        // return $request->all();
        if ($request->subCategory != null) {
            if ($request->restore) {
                foreach ($request->subCategory as $subCategory) {
                    SubCategory::withTrashed()->find($subCategory)->restore();
                }
                // view
                return redirect()->back()->withSuccess('SubCategories restored successfully.');
            } else {
                foreach ($request->subCategory as $subCategory) {
                    SubCategory::withTrashed()->find($subCategory)->forceDelete();
                }
                // view
                return redirect()->back()->withSuccess('SubCategories deleted permanently.');
            }
        }

        return back()->withErrors('No SubCategories(s) has been selected.');
    }

    public function getSubcategoriesById()
    {
        return SubCategory::where('category_id', '=', request()->category_id)->get();
    }
}

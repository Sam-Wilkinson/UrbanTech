<?php

namespace App\Http\Controllers;

use App;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {
        $category = new Category;
        $category->name_en = $request->name_en;
        $category->name_fr = $request->name_fr;
        $category->name_nl = $request->name_nl;
        if($request->image != null){
            $category->image = App::make('ImageResize')->imageStore($request->image, 'categories', 60 , 60);
        }
        if($category->save()){
            return redirect()->route('categories.index')->with([
                "status"=> "Success",
                "message"=> "You have successfully created a Category",
                "color"=> "success"
            ]);
        }else{
            return redirect()->route('categories.index')->with([
                "status"=> "Failure",
                "message"=> "Unfortunately the new Category did not save correctly",
                "color"=> "danger"
                ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategory $request, Category $category)
    {
        $category->name_en = $request->name_en;
        $category->name_fr = $request->name_fr;
        $category->name_nl = $request->name_nl;
        if($request->image != null){
            if($category->image != null){
                App::make('ImageDelete')->imageDelete($category->image, 'categories');
            }
            $category->image = App::make('ImageResize')->imageStore($request->image, 'categories', 60 , 60);
        }

        if($category->save()){
            return redirect()->route('categories.index')->with([
                "status"=> "Success",
                "message"=> "You have successfully modified a new Category",
                "color"=> "success"
                ]);
            }
            else{
                return redirect()->route('categories.index')->with([
                    "status"=> "Failure",
                    "message"=> "Unfortunately the Category was not modified",
                    "color"=> "danger"
                    ]);
            };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if($category->delete()){
            return redirect()->route('categories.index')->with([
                "status"=> "Sorry to see them go!",
                "message"=> "You have successfully removed the category",
                "color"=> "success"
            ]);
        }else{
            return redirect()->route('categories.index')->with([
                "status"=> "Failure",
                "message"=> "Unfortunately the category was not archived",
                "color"=> "danger"
            ]);
        }
    }
}

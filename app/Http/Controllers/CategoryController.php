<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
        return view('categories.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create([
            'c_name' => $request->c_name,
        ]);

        $validated = $request->validate([
            'c_name' => 'required|unique:categories',
        ]);

        // session()->flash('Add', 'Create Success');
        return redirect(route('categories.index'), compact('validated'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        // $category = Category::all();
        return view('categories.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // $categories = Category::findOrFaid($request->c_id);
        // $categories->update([
        //     'c_name' => $request->c_name,
        // ]);

        // return back();
        $category->update([
            'c_name' => $request->c_name
        ]);

        $validated = $request->validate([
            'c_name' => 'required|unique:categories',
        ]);

        // session()->flash('success', 'category update success full');
        return redirect(route('categories.index'), compact('validated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        // session()->flash('success', 'category delete success full');
        return redirect(route('categories.index'));
    }
}

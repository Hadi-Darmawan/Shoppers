<?php

namespace App\Http\Controllers;

use App\Product_Category;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_categories = Product_Category::all()->sortBy('category_name');
        return view('productCategory/addCategory', compact('product_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'category_name' => 'required|min:2|max:50|not_regex:/[^A-Z a-z]/'
        ]);

        Product_Category::create($request->all());
        return redirect()->back()->with('status', 'New Category Has Been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product_Category  $product_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Product_Category $product_category)
    {
        return view('productCategory/detailCategory', compact('product_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product_Category  $product_Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_Category $product_Category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product_Category  $product_Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_Category $product_category)
    {
        $this->validate($request, [
            'category_name' => 'required|min:2|max:50'
        ]);

        Product_Category::where('id', $product_category->id)
            ->update([
                'category_name' => $request->category_name
            ]);
        return redirect()->back()->with('status', 'Category Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product_Category  $product_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_Category $product_category)
    {
        Product_Category::destroy($product_category->id);
        return redirect()->route('productCategory/addCategory')->with('status', 'Category Has Been Deleted');
    }
}

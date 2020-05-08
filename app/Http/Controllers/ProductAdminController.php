<?php

namespace App\Http\Controllers;

use App\Product;
use App\Product_Category;
use App\Product_Category_Detail;
use App\Product_Image;
use App\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->sortByDesc('id');
        $images = Product_Image::all();
        // return view('product/allProduct', compact('products'))
        return view('product/allProduct', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_category = Product_Category::all()->sortBy('category_name');
        return view('product/addProduct', compact('product_category'));
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
            'product_name' => 'required|min:2|max:50|not_regex:/[^A-Z a-z]/',
            'category' => 'required|filled',
            'description'  => 'required|min:4|max:500',
            // 'image_name' => 'required|file|filled',
            'price' => 'required|numeric|digits_between:3,9',
            'weight'=> 'required|numeric|digits_between:1,5',
            'stock' => 'required|numeric|digits_between:1,5',
            'percentage' => 'required|numeric|digits_between:1,2',
            'start' => 'required',
            'end' => 'required',
        ]);

        // $product_images = $request->file('image_name')->store('image_name');
        // $product_images = $request->file('image_name');

        $product = Product::create([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'description' => $request->description,
            'stock' => $request->stock,
            'weight' => $request->weight,
            'product_rate' => null
        ]);

        if($request->hasFile('image_name')){
            foreach ($request->image_name as $product_image){
                // $this->validate($product_image, ['image_name' => 'required|file|filled']);
                // $product_image->resize(800, null, function ($constraint){
                //     $constraint->aspectRatio();
                // });
                // $product_image->resize(null, 400, function ($constraint){
                //     $constraint->aspectRatio();
                // });
                $product_image = $product_image->store('image_name');
                $product->product_image()->create([
                    'image_name' => $product_image
                ]);
            }
        }else{
            return redirect()->back()->with('images_status', 'Please select an image');
        }

        $product->discount()->create([
            'percentage' => $request->percentage,
            'start' => $request->start,
            'end' => $request->end
        ]);

        $product->product_category()->attach($request->category);

        return redirect()->route('allProduct')->with('status', 'New Product Has Been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        $product_image = Product_Category::all();
        $discount = Discount::all();
        $product_category = Product_Category::all()->sortBy('category_name');

        return view('product/detailProduct', compact('product', 'product_category', 'discount', 'product_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect()->back();
    }
}

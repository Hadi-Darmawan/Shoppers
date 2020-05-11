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
        // $images = Product_Image::all();
        return view('product/allProduct', compact('products'));
    }

    public function detailDiscount(Product $product)
    {
        $discount = Discount::all()->sortByDesc('id');

        return view('product/detailDiscount', compact('product', 'discount'));
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
            'price' => 'required|numeric|digits_between:3,9',
            'weight'=> 'required|numeric|digits_between:1,5',
            'stock' => 'required|numeric|digits_between:1,5',
            'percentage' => 'required|numeric|digits_between:1,2',
            'start' => 'required',
            'end' => 'required',
        ]);
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

    public function editImage(Product $product)
    {
        $product_images = Product_Image::all();

        return view('product/detailImage', compact('product_images', 'product'));
    }

    public function editDiscount(Discount $discount)
    {
        $product= Product::all();

        return view('product/editDiscount', compact('discount', 'product'));
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

        Product::where('id', $product->id)
            ->update([
                'product_name' => $request->product_name,
                'price' => $request->price,
                'description' => $request->description,
                'stock' => $request->stock,
                'weight' => $request->weight,
                'product_rate' => null
            ]);

        if($request->hasFile('image_name')){
            foreach ($request->image_name as $product_image){
                $product_image = $product_image->store('image_name');
                $product->product_image()->create([
                    'image_name' => $product_image
                ]);
            }
        }

        $product->product_category()->sync($request->category);

        return redirect()->back()->with('status', 'Product details has been updated');
    }


    public function updateImage(Request $request, Product $product)
    {

        if($request->hasFile('image_name')){
            foreach ($request->image_name as $product_image){
                $product_image = $product_image->store('image_name');
                $product->product_image()->create([
                    'image_name' => $product_image
                ]);
            }
        }

        return redirect()->back()->with('status', 'The new product images has been added');
    }

    public function updateDiscount(Request $request, Discount $discount)
    {
        $product = $discount->product->id;

        // dd($product);

        Discount::where('id', $discount->id)
        ->update([
            'product_id' => $product,
            'percentage' => $request->percentage,
            'start' => $request->start,
            'end' => $request->end
        ]);

        // $product->discount()->create([
        //     'percentage' => $request->percentage,
        //     'start' => $request->start,
        //     'end' => $request->end
        // ]);

        return redirect()->back()->with('status', 'Test Berhasil');
    }

    public function updateNewDiscount(Request $request, Product $product)
    {

        $product->discount()->where('id', $product->discount->id)->update([
            'percentage' => $request->percentage,
            'start' => $request->start,
            'end' => $request->end
        ]);

        return redirect()->back()->with('status', 'The product discount has been updated');
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

    public function destroyImage(Product_Image $image)
    {
        Product_Image::destroy($image->id);
        return redirect()->back();
    }
}

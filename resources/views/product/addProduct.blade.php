@extends('layout/admin')

@section('title', 'Shoppers - Product')

@section('contentTitle', 'Product Page')

@section('content')
<div class="card">
    <div class="card-body text-center">
        See all product that had posted
        <a href="{{ route('allProduct') }}" class="btn btn-outline-secondary btn-lg btn-block">All Product</a>
    </div>
</div>
<div class="card p-3 mb-5 pb-3 mt-4">
    <div class="card-body text-center">
      <h4 class="card-title">Add the new product</h4>
  </div>
  <form class="mt-2" method="" action="">
    <div class="form-group">
        <label for="product_name">Product Name</label>
      <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter the product name">
    </div>
    <div class="form-group">
      <label for="product_kategory">Product Ketegory</label>
      <div class="input-group mb-1">
        <select class="custom-select" id="product_kategory" name="kategory_product">
          <option selected>Choose The Product Kategory</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <div class="input-group-append">
          <label class="input-group-text" for="product_kategory">Kategory</label>
        </div>
      </div>
      <p class="text-secondary text-decoration-none">Can't find any category? Let's <a class="text-decoration-none" href="{{ route('addCategory') }}">create a new category</a></p>
    </div>
    <div class="form-group">
      <label for="description">Product Description</label>
      <input type="text" class="form-control" id="description" name="description" placeholder="Enter the product description">
    </div>
    <div class="form-group">
      <label for="product_image">Product Image</label>
      <div class="custom-file">
          <input type="file" accept="image/*" name="product_image" id="product_image" class="custom-file-input">
          <label class="custom-file-label" for="product_image">Select the product image</label>
          <script>
            $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
          </script>
      </div>
    </div>
    <div class="form-group">
      <label for="product_price">Product Price</label>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Rp</span>
        </div>
        <input type="text" id="product_price" class="form-control" name="price" placeholder="Enter the product price"">
        <div class="input-group-append">
          <span class="input-group-text">,-</span>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="discount">Discount</label>
        <div class="input-group mb-3">
          <input type="text" id="discount" class="form-control" name="discount" placeholder="Enter the product discount">
          <div class="input-group-append">
            <span class="input-group-text">%</span>
          </div>
        </div>
      </div>
      <div class="form-group col-md-4">
        <label for="discount_start">Start at</label>
        <div class="input-group mb-3">
          <input type="date" id="discount_start" class="form-control" name="discount_start" placeholder="Product discount start">
        </div>
      </div>
      <div class="form-group col-md-4">
        <label for="discount_end">End at</label>
        <div class="input-group mb-3">
          <input type="date" id="discount_end" class="form-control" name="discount_end" placeholder="Product discount end">
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Add Product</button>
  </form>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Create Product')


@section('content')
<div class="bg-gray-100 flex items-center justify-center min-h-screen">


  <div class="w-full max-w-lg p-8 space-y-6 bg-white rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold text-center text-red-600">Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
      @csrf
      @method('PUT')

      <div class="flex flex-col">
        <label class="font-medium text-red-600">Product ID:</label>
        <input type="text" name="product_id" value="{{ $product->product_id }}" required class="border border-gray-300 rounded-lg p-2 focus:border-red-600 focus:ring focus:ring-red-200">
      </div>

      <div class="flex flex-col">
        <label class="font-medium text-red-600">Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required class="border border-gray-300 rounded-lg p-2 focus:border-red-600 focus:ring focus:ring-red-200">
      </div>

      <div class="flex flex-col">
        <label class="font-medium text-red-600">Description:</label>
        <textarea name="description" class="border border-gray-300 rounded-lg p-2 focus:border-red-600 focus:ring focus:ring-red-200">{{ $product->description }}</textarea>
      </div>

      <div class="flex flex-col">
        <label class="font-medium text-red-600">Price:</label>
        <input type="number" step="0.01" name="price" value="{{ $product->price }}" required class="border border-gray-300 rounded-lg p-2 focus:border-red-600 focus:ring focus:ring-red-200">
      </div>

      <div class="flex flex-col">
        <label class="font-medium text-red-600">Stock:</label>
        <input type="number" name="stock" value="{{ $product->stock }}" class="border border-gray-300 rounded-lg p-2 focus:border-red-600 focus:ring focus:ring-red-200">
      </div>

      <div class="flex flex-col">
        <label class="font-medium text-red-600">Current Image:</label>
        <div class="mt-2">
          @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-32 h-auto border border-gray-300 rounded-lg">
          @else
            <p class="text-gray-500">No image uploaded.</p>
          @endif
        </div>
      </div>

      <div class="flex flex-col mt-4">
        <label class="font-medium text-red-600">Upload New Image:</label>
        <input type="file" name="image" class="border border-gray-300 rounded-lg p-2 focus:border-red-600 focus:ring focus:ring-red-200">
      </div>

      <button type="submit" class="w-full py-2 px-4 bg-red-600 text-white font-bold rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
        Update Product
      </button>
    </form>
  </div>
</div>
@endsection


















@extends('layouts.app')

@section('title', 'Create Product')


@section('content')

<div class="bg-gray-100 flex items-center justify-center min-h-screen">
       

  <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-lg">

    
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
      @csrf

      <!-- <div class="flex flex-col">
        <label class="font-medium text-red-600">Product ID:</label>
        <input type="text" name="product_id" required class="border border-gray-300 rounded-lg p-2 focus:border-red-600 focus:ring focus:ring-red-200">
      </div> -->

      <div class="flex flex-col">
        <label class="font-medium text-red-600">Name:</label>
        <input type="text" name="name" required class="border border-gray-300 rounded-lg p-2 focus:border-red-600 focus:ring focus:ring-red-200">
      </div>

      <div class="flex flex-col">
        <label class="font-medium text-red-600">Description:</label>
        <textarea name="description" class="border border-gray-300 rounded-lg p-2 focus:border-red-600 focus:ring focus:ring-red-200"></textarea>
      </div>

      <div class="flex flex-col">
        <label class="font-medium text-red-600">Price:</label>
        <input type="number" step="0.01" name="price" required class="border border-gray-300 rounded-lg p-2 focus:border-red-600 focus:ring focus:ring-red-200">
      </div>

      <div class="flex flex-col">
        <label class="font-medium text-red-600">Stock:</label>
        <input type="number" name="stock" class="border border-gray-300 rounded-lg p-2 focus:border-red-600 focus:ring focus:ring-red-200">
      </div>

      <div class="flex flex-col">
        <label class="font-medium text-red-600">Image:</label>
        <input type="file" name="image" class="border border-gray-300 rounded-lg p-2 focus:border-red-600 focus:ring focus:ring-red-200">
      </div>

      <button type="submit" class="w-full py-2 px-4 bg-red-600 text-white font-bold rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
        Create Product
      </button>
    </form>
  </div>

</div>
@endsection





























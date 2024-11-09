@extends('layouts.app')

@section('title', 'Create Product')


@section('content')
<div class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold text-center text-red-600 mb-6">Product Details</h1>

    <p class="text-lg mb-4"><strong class="text-red-600">ID:</strong> {{ $product->product_id }}</p>
    <p class="text-lg mb-4"><strong class="text-red-600">Name:</strong> {{ $product->name }}</p>
    <p class="text-lg mb-4"><strong class="text-red-600">Description:</strong> {{ $product->description }}</p>
    <p class="text-lg mb-4"><strong class="text-red-600">Price:</strong> ${{ $product->price }}</p>
    <p class="text-lg mb-4"><strong class="text-red-600">Stock:</strong> {{ $product->stock }}</p>

    <div class="mt-6">
      <p class="text-lg text-red-600 font-semibold">Product Image:</p>
      @if($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="mt-4   object-cover border border-red-600 rounded-lg h-[200px]">
      @else
        <p class="text-gray-500 mt-4">No image available.</p>
      @endif
    </div>
  </div>

</div>
@endsection
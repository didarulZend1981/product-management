
@extends('layouts.app')




@section('content')




  <!-- Search Form -->
  <div class="mb-4">
    <form method="GET" action="{{ route('products.index') }}" class="flex items-center space-x-2">
      <input type="text" name="search" placeholder="Search by Product ID or Description" value="{{ request('search') }}" 
             class="w-full p-2 border border-red-300 rounded-md focus:outline-none focus:border-red-500">
      <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md shadow hover:bg-red-700">
        Search
      </button>
    </form>
  </div>

  <!-- Sorting Links -->
  <div class="mb-4 flex space-x-4 text-red-600 font-semibold">
    <a href="{{ route('products.index', ['sort_field' => 'name', 'sort_direction' => ($sortField === 'name' && $sortDirection === 'asc') ? 'desc' : 'asc', 'search' => $search]) }}" class="hover:underline">
      Sort by Name
      @if($sortField === 'name')
        {{ $sortDirection === 'asc' ? '▲' : '▼' }}
      @endif
    </a>

    <a href="{{ route('products.index', ['sort_field' => 'price', 'sort_direction' => ($sortField === 'price' && $sortDirection === 'asc') ? 'desc' : 'asc', 'search' => $search]) }}" class="hover:underline">
      Sort by Price
      @if($sortField === 'price')
        {{ $sortDirection === 'asc' ? '▲' : '▼' }}
      @endif
    </a>
  </div>

  <!-- Create New Product Link -->
  <div class="mb-4">
    <a href="{{ route('products.create') }}" class="text-white bg-red-600 px-4 py-2 rounded-md shadow hover:bg-red-700">
      Create New Product
    </a>
  </div>

  <!-- Display Products Table -->
  <div class="overflow-x-auto">
    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
      <thead>
        <tr class="bg-red-600 text-white">
          <th class="px-4 py-3 text-left">Product ID</th>
          <th class="px-4 py-3 text-left">Name</th>
          <th class="px-4 py-3 text-left">Description</th>
          <th class="px-4 py-3 text-left">Price</th>
          <th class="px-4 py-3 text-left">Stock</th>
          <th class="px-4 py-3 text-left">Image</th>
          <th class="px-4 py-3 text-left">Actions</th>
        </tr>
      </thead>
      <tbody class="text-gray-700">
        @foreach($products as $product)
        <tr class="border-b">
          <td class="px-4 py-3">{{ $product->product_id }}</td>
          <td class="px-4 py-3">{{ $product->name }}</td>
          <td class="px-4 py-3">{{ $product->description }}</td>
          <td class="px-4 py-3">{{ $product->price }}</td>
          <td class="px-4 py-3">{{ $product->stock }}</td>
          <td class="px-4 py-3">
            @if($product->image)
              <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-20 h-20 object-cover rounded-md">
            @else
              <span class="text-gray-500">No image</span>
            @endif
          </td>
          <td class="px-4 py-3 space-x-2">
            <a href="{{ route('products.show', $product->id) }}" class="text-red-500 hover:underline">View</a>
            <a href="{{ route('products.edit', $product->id) }}" class="text-yellow-500 hover:underline">Edit</a>
            <form method="POST" action="{{ route('products.destroy', $product->id) }}" class="inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="text-red-500 hover:underline">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- Pagination Links -->
  <div class="mt-6">
   
    {{ $products->appends(request()->input())->links() }}
  </div>









@endsection







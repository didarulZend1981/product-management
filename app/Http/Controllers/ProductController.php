<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    

    public function index(Request $request){


         
            $sortField = $request->get('sort_field', 'name');
            $sortDirection = $request->get('sort_direction', 'asc');

           
            $search = $request->get('search');

      
            $query = Product::query();

         
            if ($search) {
                $query->where('product_id', 'like', "%{$search}%")
                      ->orWhere('description', 'like', "%{$search}%");
            }

          
            $products = $query->orderBy($sortField, $sortDirection)->paginate(10);

            return view('products.index', compact('products', 'sortField', 'sortDirection', 'search'));

   

    }

    public function create(){
            return view('products.create');
    }


    public function store(Request $request){
            $validated =$request->validate([
         
                'name' => 'required',
                'price' => 'required|numeric',
                'description' => 'nullable',
                'stock' => 'nullable|integer',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

             if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $validated['image'] = $imagePath;
             }

   
           Product::create($validated);


            return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }



    public function show($id){
            $product = Product::findOrFail($id);
            return view('products.show', compact('product'));
    }


    public function edit($id){
            $product = Product::findOrFail($id);
            return view('products.edit', compact('product'));
    }


    public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

   
    $validated = $request->validate([
        'product_id' => 'required|unique:products,product_id,' . $product->id,
        'name' => 'required',
        'price' => 'required|numeric',
        'description' => 'nullable',
        'stock' => 'nullable|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

  
    $randomNumber = rand(100, 999);
    $validated['product_id'] = Str::slug($request->name) . '-' . $randomNumber;

 
    if ($request->hasFile('image')) {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $imagePath = $request->file('image')->store('images', 'public');
        $validated['image'] = $imagePath;
    }


    $product->update($validated);

    return redirect()->route('products.index')->with('success', 'Product updated successfully.');
}



   


    public function destroy($id){


            $product = Product::findOrFail($id);

            if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }



}

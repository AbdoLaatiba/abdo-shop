<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.products', ['products' => Product::all()->sortDesc()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'price' => ['required'],
            'category_id' => ['required'],
            'img' => ['required', 'mimes:jpeg,png,jpg'],
            'description' => ['required'],
        ]);

        $imagePath = request('img')->store('uploads', 'public');

        //intervention magic happens here, we are resizing the image before saving to db
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        Product::create([
            'name' => $data['name'],
            'price' => $data['price'],
            'category_id' => $data['category_id'],
            'img' => $imagePath,
            'description' => $data['description'],
        ]);

        return redirect()->route('products.index')->with('success', "Product Created Successfuly");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('client.product', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $image = $imagePath = '';
        if ($request->has('img')) {
            $data = $request->validate([
                'name' => ['required'],
                'price' => ['required'],
                'img' => ['required', 'mimes:jpeg,png,jpg'],
                'description' => ['required'],
            ]);
            unlink(public_path('storage/'.$product->img));
            $imagePath = request('img')->store('uploads', 'public');

            //intervention magic happens here, we are resizing the image before saving to db
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
            $image->save();
        }
        else {
            $data = $request->validate([
                'name' => ['required'],
                'price' => ['required'],
                'description' => ['required'],
            ]);
        }
       

        

        $product->update([
            'name' => $data['name'],
            'price' => $data['price'],
            'img' => $imagePath,
            'description' => $data['description'],
        ]);

        return redirect(route('products.index'))->with('success', "Product Created Successfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'))->with('success', "Product Deleted Successfuly");
    }
}

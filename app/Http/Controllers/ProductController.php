<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Provider;

use Intervention\Image\Facades\Image;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::get();
        $providers = Provider::get();

        return view('admin.products.create', compact('categories', 'providers'));
    }

    public function store(StoreRequest $request)
    {
        //si en la request viene un archivo llamado (image)
        if ($request->hasFile('image')) {
            //Se obtiene la imagen

            $name_image = time() . '_' . $request->file('image')->getClientOriginalName();

            $route = public_path('image/') . $name_image;

            Image::make($request->file('image'))->resize(150, 150)->save($route);

            Product::create([
                'name' => $request->name,
                'code' => $request->code,
                'stock' => $request->stock,
                'image' => $name_image,
                'sell_price' => $request->sell_price,
                'category_id' => $request->category_id,
                'provider_id' => $request->provider_id
            ]);
        } else {
            Product::create($request->all());
        }

        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::get();
        $providers = Provider::get();

        return view('admin.products.edit', compact('product', 'categories', 'providers'));
    }

    public function update(UpdateRequest $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}

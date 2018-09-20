<?php

namespace App\Http\Controllers;

use App\Products;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create()
    {
        return view('products.create');
    }
    public function list(Request $request)
    {
        $post = new Products();
        $post->title = $request->get('title');
        $post->category = $request->get('category');
        $post->price = $request->get('price');
        $post->text = $request->get('text');
        $post->photo = 1;
        $post->save();
        return redirect('/products/');
    }
    public function index()
    {
        $products = Products::all();
        $data['products'] = $products;
        return view('products.index', $data);
    }
}

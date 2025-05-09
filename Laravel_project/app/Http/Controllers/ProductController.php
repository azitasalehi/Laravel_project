<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Product;
use Illuminate\Http\Request;
use function Laravel\Prompts\search;

class ProductController extends Controller
{
    public function single_product($slug)
    {
        if (isset($slug)) {
            $product = Product::where('slug', $slug)->first();
            $product->increment('view');
            if ($product->id) {
                return view('single-product', ['product' => $product]);
            }
        }
    }

    public function list_category()
    {
        $products = Product::orderby('id', 'asc')->limit(8)->get();
        $off_products = Product::orderby('new_price', 'asc')->get();
        $brands = Brands::all();
        return view('list-category',
            [
                'products' => $products,
                'off_products' => $off_products->slice(0, 5),
                'off_products2' => $off_products->slice(5, 10),
                'brands' => $brands
            ]);
    }

    public function search_product(Request $request)
    {
        $search = $request->search;
        if (isset($search)) {
            $request->session()->put('search', $search);
            $products = Product::where('title', 'like', '%' . $search . '%')->get();
            return view('search-product', ['products' => $products]);
        } else {
            $products = Product::all();
            return view('search-product', ['products' => $products]);
        }
    }

    public function most_visit()
    {
        if (session()->has('search')) {
            if ( session()->get('search')==null || session()->get('search')=="") {
                session()->forget('search');
            }
        }
        if (session()->has('search')) {
            $search = session()->get('search');
            $products = Product::where('title', 'like', '%' . $search . '%')->where('view', '>=', 140)->get();
            return view('search-product', ['products' => $products]);
        }
         else {
            $products = Product::where('view', '>=', 200)->orderBy('view', 'desc')->get();
            return view('search-product', ['products' => $products]);
        }


    }

    public function newest()
    {
        if (session()->has('search')) {
            if ( session()->get('search')==null || session()->get('search')=="") {
                session()->forget('search');
            }
        }

        if (session()->has('search')) {
            $search = session()->get('search');
            $products = Product::where('title', 'like', '%' . $search . '%')->orderBy('id', 'desc')->get();
            return view('search-product', ['products' => $products]);
        } else {
            $products = Product::orderBy('id', 'desc')->get();
            return view('search-product', ['products' => $products]);
        }


    }

    public function price()
    {
        if (session()->has('search')) {
            if ( session()->get('search')==null || session()->get('search')=="") {
                session()->forget('search');
            }
        }
        if (session()->has('search')) {
            $search = session()->get('search');
            $products = Product::where('title', 'like', '%' . $search . '%')->orderby('new_price', 'desc')->get();
            return view('search-product', ['products' => $products]);
        } else {
            $products = Product::orderBy('new_price', 'desc')->get();
            return view('search-product', ['products' => $products]);
        }


    }
}

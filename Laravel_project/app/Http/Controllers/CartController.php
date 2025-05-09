<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\View\View;

class CartController extends Controller
{
    public function add_to_cart(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->first();

        if ($product) {
            $cart = session()->get('cart_product', []);

            $existingProductKey = array_search($product->id, array_column($cart, 'id'));

            if ($existingProductKey !== false) {

                $cart[$existingProductKey]['quantity'] += 1;
            } else {

                $cart[] = [
                    'id' => $product->id,
                    'slug' => $product->slug,
                    'title' => $product->title,
                    'new_price' => $product->new_price,
                    'mini_image' => $product->mini_image,
                    'quantity' => 1,
                ];
            }

            session()->put('cart_product', $cart);
            session()->flash('cart_added', true);
        }

        return back();
    }

    public function cartPage()
    {
        return view('cart');
    }

    public function showCart(Request $request)
    {
        $products = $request->session()->get('cart_product', []);

            return Response::json([
                'status' => true,
                'cart' => $products
            ]);


    }

    public function deleteCart($slug){
        if (empty($cart)) {
            session()->forget('cart_product');
        }
        $cart= session()->get('cart_product',[]);
        if (!is_array($cart)) {
            $cart = [];
        }

        $cart = array_filter($cart, function ($item) use ($slug) {
            return $item['slug'] !== $slug;
        });
        session()->put('cart_product', $cart);

        return back()->with('delete-cart', true);

}


}

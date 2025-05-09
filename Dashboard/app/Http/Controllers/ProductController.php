<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function add_product()
    {
        return view('add-product');
    }

    public function form_product(Request $request)
    {

        $validated = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'slug' => 'required|string|max:50',
            'price' => 'required|max:15',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'mini_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'category' => 'required|string|max:20',
        ]);
        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated->errors());
        }

        $image = "storage/" . $request->image->store('Upload_images', 'public');
        $mini_image = "storage/" . $request->mini_image->store('Upload_images', 'public');

        Product::create([
            'category_id' => $request->category,
            'image' => $image,
            'mini_image' => $mini_image,
            'discount' => "0",
            'title' => $request->name,
            'count' => $request->count,
            'hr_tag' => $request->hr_tag,
            'desc_title' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug,
            'list_group_item' => '',
            'old_price' => $request->price,
            'new_price' => $request->price,
            'hashtag' => "",
        ]);
        return redirect()->back()->with('success', true);
    }

    public function edit_product($slug)
    {
        $product = Product::where('slug', $slug)->first();
        if ($product) {
            return view('edit-product', compact('product'))->with('success', true);
        }
        return 'error';
    }

    public function edit_product_form(Request $request, $slug)
    {
        if (isset($slug)) {
            $product = Product::where('slug', $slug)->first();
            $image = $product['image'];
            $mini_image = $product['mini_image'];
            if (isset($product)) {
                if ($request->image) {
                    $image = "storage/" . $request->image->store('Upload_images', 'public');
                }
                if ($request->mini_image) {
                    $mini_image = "storage/" . $request->mini_image->store('Upload_images', 'public');
                }
                $product->update([
                    'category_id' => $request->category,
                    'image' => $image,
                    'mini_image' => $mini_image,
                    'discount' => "0",
                    'title' => $request->name,
                    'count' => $request->count,
                    'desc_title' => $request->name,
                    'description' => $request->description,
                    'slug' => $request->slug,
                    'list_group_item' => '',
                    'old_price' => $request->price,
                    'new_price' => $request->price,
                    'hashtag' => $request->hashtag,
                ]);
                return redirect()->back()->with('success', true);
            }
        } else return redirect()->back()->with('error', true);

    }

    public function delete_product($slug)
    {
        if (isset($slug)) {
            $product = Product::where('slug', $slug)->first();
            if (isset($product)) {
                $product->delete();
                return back()->with('success', true);
            }
        }
        return redirect()->back()->with('error-delete', true);

    }
}

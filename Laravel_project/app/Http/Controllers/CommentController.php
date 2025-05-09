<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function insert_comment(Request $request,$slug)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'comment' => 'required|string|min:5',
        ]);

        $product = Product::where('slug', '=', $slug)->first();

        if (isset($product)){

            $faker = Factory::create();
            $faker->addProvider(new FakerPicsumImagesProvider($faker));
            Comments::create([
                'user_id' => Auth::check() ? Auth::id() : null,
                'product_id' => $product->id,
                'avatar' => $faker->imageUrl($width = 100, $height = 100),
                'name' => 'Guest',
                'email' => $request->email,
                'text' => $request->comment,
                'approve'=>0,
                'created_at' => Carbon::now(),
            ]);
            session()->flash('status','نظر شما با موفقیت ارسال شد ، لطفا منتظر تایید ادمین بمانید..');
            return back();
        }
         return null;
    }
}

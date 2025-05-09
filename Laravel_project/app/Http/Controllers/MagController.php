<?php

namespace App\Http\Controllers;

use App\Models\Mag_Category;
use App\Models\Magazine;
use Illuminate\Http\Request;

class MagController extends Controller
{
    public function category_blog()
    {
        $magazines = Magazine::all();
        return view('category-blog',['magazines'=>$magazines]);
    }

    public function single_blog($slug){
    if (isset($slug)){
        Magazine::where('slug','=',$slug)->increment('view');
        $mag=Magazine::where('slug','=',$slug)->first();
        if ($mag->id){
           return view('single-blog',['mag'=>$mag]);
        }
    }
    }

    public function showMagazine($slug,$id)
    {
        if (isset($id)){
            $magazines=Magazine::where('mag_category_id',$id)->get();
            foreach ($magazines as $magazine){
                Magazine::where('id','=',$magazine->id)->increment('view');
            }
            return view('category', [
                'magazines'=>$magazines,
                'slug'=>$slug]);
        }
    }

}

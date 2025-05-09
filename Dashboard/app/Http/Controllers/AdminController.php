<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Comments;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function products()
    {
        return view('index');
    }


    public function category()
    {
        return view('add-category');
    }

    public function add_category(Request $request)
    {

        $validated = Validator::make($request->all(), [
            'name' => 'string',
        ]);
        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated->errors());
        }

        Category::create([
            'name' => $request->name,
        ]);
        return redirect()->back()->with('success', true);

    }

    public function active_category($name)
    {
        $category = Category::where('name', $name)->first();
        if ($category) {
            $category->update([
                'status' => 0
            ]);
        }
        return back()->with('active', true);

    }

    public function not_active_category($name)
    {
        $category = Category::where('name', $name)->first();
        if ($category) {
            $category->update([
                'status' => 1
            ]);
        }
        return back()->with('not_active', true);

    }

    public function profile()
    {
        $admin = Admin::find(1);
        session()->put('admin', $admin);
        return view('admin-profile', ['admin' => $admin]);
    }

    public function profile_update()
    {
        return view('admin-update');
    }

    public function profile_update_form(Request $request)
    {
        $name = Admin::where('user_name', $request->user_token)->first();
        if (isset($name)) {
            $avatar = $name->avatar;
            if ($request->avatar) {
                $avatar = "storage/" . $request->avatar->store('Upload_images', 'public');
            }
            $name->update([
                'name' => $request->name,
                'user_name' => $request->user_name,
                'email' => $request->email,
                'mobile' => $request->phone,
                'address' => $request->address,
                'instagram' => $request->social_media,
                'facebook' => "",
                'avatar' => $avatar,
            ]);
            return redirect()->back()->with('success', true);
        }
        return redirect()->back()->with('error', true);


    }

    public function users()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    public function edit_user($name)
    {
        $user = User::where('name', $name)->first();
        return view('user-update', ['user' => $user]);

    }

    public function edit_user_form(Request $request)
    {
        if (isset($request->user_token)) {
            $user = User::where('name', $request->user_token)->first();
            if ($user) {
                $avatar = $user->avatar;
                if ($request->avatar) {
                    $avatar = "storage/" . $request->avatar->store('Upload_images', 'public');
                }
                $user->update([
                    'name' => $request->name,
                    'avatar' => $avatar,
                    'email' => $request->email
                ]);
                return back()->with('success', true);
            }
        }
        return back()->with('errors', true);
    }

    public function delete_user($name)
    {
        if (isset($name)) {
            $name = User::where('name', $name)->first();
            if ($name) {
                $name->delete();
                return redirect()->back()->with('success', true);
            }
        }
        return redirect()->back()->with('error', true);
    }

    public function comments()
    {
        $comments = Comments::all();
        return view('comments', ['comments' => $comments]);

    }

    public function comments_approve(Request $request, $name)
    {
        $comment = Comments::where('name', $name)->first();
        if ($comment) {
            $comment->approve = $request->input('publish', 0);
            $comment->save();
            return redirect()->back()->with('success', true);
        }
    }

    public function comments_delete($name)
    {
        $comment = Comments::where('name', $name)->first();
        if ($comment) {
            $comment->delete();
            return redirect()->back()->with('delete', true);
        }
        return redirect()->back()->with('delete', false);
    }


}

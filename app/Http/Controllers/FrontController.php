<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Blog;

class FrontController extends Controller
{
    public function storeContct(Request $request)
    {
        $request->validate([
            'name' =>'required|min:3',
            'phone' =>'required|min:10',
            'subject' =>'required|min:10',
        ]);
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
        ]);

        session()->flash('success','الرساله نجحت سوف تتقلي الرد قريبا');
        return back();
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('blog',compact('blogs'));
    }

    public function blogDetail($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog-detail',compact('blog'));
    }

    public function login()
    {
        return view('auth.login-user');
    }
}

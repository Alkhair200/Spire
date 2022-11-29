<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ContactCount = Contact::count();
        $ServiceCount = Blog::count();
        $last_blog = Blog::orderBy('created_at' , 'desc')->take(4)->get();
        $last_contact = Contact::orderBy('created_at' , 'desc')->take(4)->get();


        return view('dashboard.welcome',compact('ContactCount','ServiceCount','last_blog','last_contact'));
    }
}

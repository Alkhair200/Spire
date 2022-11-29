<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();
        return view('dashboard.services.index',compact('blogs'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        // Image::make($request->image)->resize(800, 700)->save(public_path('uploads/img/' .$request->image->hashName()));

        // $filePath = save(public_path('uploads/img/' .$request->image));;
        $request->validate([
            'title' =>'required|min:3',
            'description' =>'required',
        ]);



        $file_name = "defualt.jpg";
        if ($request->has('image')) {
   
    $file_extension = $request->image->getClientOriginalExtension();

    $file_name = time().'.'.$file_extension;
    $path = 'uploads/img/';
    $request->image->move($path,$file_name);
        }

        Blog::create([
            'title' =>$request->title,
            'description' =>$request->description,
            'img' =>$file_name,
        ]);
  
        toastr()->success(__("site.added_successfully"));
        return back();        
    }


    public function show(Blog $services)
    {
        //
    }


    public function edit(Blog $services)
    {
        //
    }


    public function update(Request $request, Blog $blog)
    {

        $request->validate([
            'title' =>'required|min:3',
            'description' =>'required',
        ]);

        try {

            $file_name = "default.jpg";
        if ($request->image) {

            if ($blog->img != "default.jpg") {

                Storage::disk('public_uploads')->delete('/img/' .$blog->img);
                $file_extension = $request->image->getClientOriginalExtension();

                $file_name = time().'.'.$file_extension;
                $path = 'uploads/img/';
                $request->image->move($path,$file_name);  

            $blog->update([
            'img' => $file_name,
            
            ]);                  

            } else{
                
                $file_extension = $request->image->getClientOriginalExtension();
                $file_name = time().'.'.$file_extension;
                $path = 'uploads/img/';
                $request->image->move($path,$file_name);

            $blog->update([
            'img' => $file_name,
            
            ]);                
            }  
        
        }// end external if                    
    
    
            $blog->update([
            'title' => $request->title,
            'description' => $request->description,
            
            ]);
            
            toastr()->info(__('site.updated_successfully'));
           
            return back();

        } catch (\Exception $ex) {

            return response()->json(['errors' => $ex->getMessage()]);
        }        
    }

    public function destroy($id)
    {
        try {

            $blog = Blog::find($id);

            if ($blog->img != 'default.jpg') {
            
                Storage::disk('public_uploads')->delete('/img/' .$blog->img);
            }           
            
            $blog->delete();
            toastr()->info(__("site.deleted_successfully")); 
            return back();

        } catch (\Exception $ex) {

            return response()->json(['errors' => $ex->getMessage()]);
        }        
    }
}

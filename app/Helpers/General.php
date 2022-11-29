<?php
use Illuminate\Support\Facades\Config;
use Str;

function get_Languages(){
    return \App\Models\Language::active()->Selection()->get();
}

function get_defualte_Lang(){
    return  Config::get('app.locale');
}

//  function SaveImage($image,$folder){
//     //save photo in folder
//     $file_extension = $image -> getClientOriginalExtension();
//     $file_name = time().'.'.$file_extension;
//     $path = 'assets/images/' . $folder;
//     $image ->move($path,$file_name);
//     return $file_name;
//  }
function uploadImage($folder, $image)
{
    $image->store('/', $folder);
    $filename = $image->hashName();
    $path = 'images/' . $folder . '/' . $filename;
    return $path;
}

function dataFilter($data)
{

    $data->filter(function ($value , $key)
    {

        return $value->description = Str::limit($value->description , 80, '.......');

    });

    return $data;
}

function contactFilter($data)
{

    $data->filter(function ($value , $key)
    {

        return $value->subject = Str::limit($value->subject , 30, '.......');

    });

    return $data;
}


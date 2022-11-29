<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $guarded=[];
    protected $appends = ['image_path'];

    function getImagePathAttribute(){

        return asset('uploads/img/' .$this->img);
        
    }    
}

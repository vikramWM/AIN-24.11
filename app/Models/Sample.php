<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Sample extends Model
// {
//     use HasFactory;
// }

 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;
    protected $table = 'sample';
    protected $fillable = ['category', 'content', 'title' , 'slug']; 

    public function category()
    {
        return $this->hasMany('App\Models\SampleCategory', 'id','category', );              
    }
}
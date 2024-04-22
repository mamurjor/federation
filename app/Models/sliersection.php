<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sliersection extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
       'slogan',
       'slug', 
       'imageurl',   
       'description', 
        'button_text',
       'button_url',
    ];
}

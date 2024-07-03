<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'tehsil',
        'description',
        'content',
        'image',
        'status',
    ];
    
    function category(){
        return $this->belongsTo(Blogcategories::class);
    }
}

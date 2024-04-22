<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
       'slogan',
       'slug', 
       'imageurl',      
        'button_one_text',
       'button_one_url',
       'button_two_text',
       'button_two_url',
    ];
}

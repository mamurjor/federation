<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classified extends Model
{
    use HasFactory;

   protected $fillable = ['user_id', 
   'adid', 
   'title', 
   'description', 
   'category', 
   'price', 
   'country', 
   'district', 
   'tehsil', 
   'location', 
   'email', 
   'dateposted', 
   'expiredate', 
   'condition', 
   'keyword', 
   'image'];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Classified extends Model
{
    use HasFactory, Notifiable;

   protected $fillable = ['user_id', 
   'adid', 
   'title', 
   'description', 
   'category', 
   'price', 
   'Division', 
   'district', 
   'tehsil', 
   'location', 
   'email', 
   'dateposted', 
   'expiredate', 
   'condition', 
   'keyword', 
   'image',
   'multipleimage',
   'video'
];
}

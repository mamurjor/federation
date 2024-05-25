<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voteannounce extends Model
{
    use HasFactory;
    
    protected $fillable = [
      
        'country',  
        'district',      
        'tehsil',      
        'announce',      
        'votetype',   
        'votepositiontype',   
        'votingdate',   
        'image',      
    ];

}

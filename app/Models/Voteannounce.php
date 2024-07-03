<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voteannounce extends Model
{
    use HasFactory;
    
    protected $fillable = [
      
        'Division',  
        'district',      
        'tehsil',      
        'announce',      
        'votetype',   
        'votepositiontype',   
        'votingdate',   
        'image',      
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wings extends Model
{
    use HasFactory;

    protected $fillable = [    
        'wings_type',  
        'wings_type_name',      
        'profession_name',        
    ];

}

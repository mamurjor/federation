<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WingsVoteannounce extends Model
{
    use HasFactory;

    protected $fillable = [
      
        'type',  
        'type_name',      
        'profession_name',      
        'announce',      
        'votetype',   
        'votepositiontype',   
        'votingdate',   
    ];

    

   
}

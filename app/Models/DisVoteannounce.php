<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisVoteannounce extends Model
{
    use HasFactory;

    protected $fillable = [
      
        'country',  
        'district',      
        'announce',      
        'votetype',   
        'votepositiontype',   
        'votingdate',   
    ];
}

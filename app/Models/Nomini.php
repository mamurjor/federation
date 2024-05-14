<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomini extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomini_id',
        'status',
        'country',  
        'district',      
        'tehsil',      
        'announce',      
        'votetype',   
        'votepositiontype',   
        'votingdate',   
        'charge',     
        'card_number',   
        'stripe_token',   
        'payment_type'
    ];

}

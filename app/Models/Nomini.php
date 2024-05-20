<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function user()
    {
        return $this->belongsTo(User::class, 'nomini_id');
    }

}

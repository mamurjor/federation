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
        'division',  
        'district',      
        'tehsil',      
        'announce',      
        'votetype',   
        'votepositiontype',   
        'votingdate',   
        'emailone',   
        'emailtwo',   
        'charge',     
        'card_number',   
        'stripe_token',   
        'payment_type',
        'email_one_verified',
        'email_two_verified',
        'token_one',
        'token_two'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'nomini_id', 'id');
    }
 
   

}

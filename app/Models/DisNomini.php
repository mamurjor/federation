<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisNomini extends Model
{
    use HasFactory;

    protected $fillable = [
        'disnomini_id',
        'status',
        'Division',  
        'district',      
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
        return $this->belongsTo(User::class, 'disnomini_id', 'id');
    }
}

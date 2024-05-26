<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WingsNomini extends Model
{
    use HasFactory;

    protected $fillable = [
        'wingsnomini_id',
        'status',
        'type',  
        'type_name',      
        'profession_name',      
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
        return $this->belongsTo(User::class, 'wingsnomini_id', 'id');
    }
}

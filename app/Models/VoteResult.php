<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VoteResult extends Model
{
    use HasFactory, Notifiable;


    protected $fillable = [
        'user_id',
        'votepositiontype',
        'votetype',
        'votingdate',
        'country',
        'district',
        'tehsil',
        'nomini_id',
        'status'
    ];

    public function nomini()
    {
        return $this->belongsTo(Nomini::class, 'nomini_id');
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'nomini_id');
    // }
}

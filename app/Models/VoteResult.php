<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'votepositiontype',
        'votetype',
        'votingdate',
        'country',
        'district',
        'tehsil',
        'nomini_id',
        'position'
    ];
}

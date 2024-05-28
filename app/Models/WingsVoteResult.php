<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WingsVoteResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'votepositiontype',
        'votetype',
        'votingdate',
        'type',
        'type_name',
        'profession_name',
        'wingsnomini_id',
        'status'
    ];
}

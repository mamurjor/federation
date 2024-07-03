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
        'wings',
        'wingsnomini_id',
        'status'
    ];

    public function wingsnomini()
    {
        return $this->belongsTo(WingsNomini::class, 'wingsnomini_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VotingPositionType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'charge',
        'code',
    ];
}

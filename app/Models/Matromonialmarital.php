<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matromonialmarital extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
    ];
}

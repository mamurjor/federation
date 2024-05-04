<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classifiedcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
    ];
}

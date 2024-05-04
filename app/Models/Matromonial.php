<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matromonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'matromonialid',
        'name',
        'location',
        'gender',
        'religion',
        'marital',
        'caste',
        'country',
        'district',
        'tehsil',
        'height',
        'education',
        'familydetails',
        'occupation',
        'income',
        'aboutme',
        'email',
        'dateofbirth',
        'matromonialimage',
        'age',
        'partner_age_range',
        'partner_location',
        'partner_compatibility',
        'partner_communication',
        'partner_requirment_text',
        'buisness_des',
    ];
}

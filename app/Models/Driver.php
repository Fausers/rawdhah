<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =
      [
        'fname',
        'mname',
        'lname',
        'dob',
        'license_date',
        'licence_type',
        'phone_number',
        'e_address',
        'year_experience',
        'passport',
        'nida',
        'licence',
        ];


}

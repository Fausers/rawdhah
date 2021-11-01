<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Quote extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'loading_point',
        'destination_zip',
        'sector',
        'total_weight',
        'number_packages',
        'email',
    ];
    
}

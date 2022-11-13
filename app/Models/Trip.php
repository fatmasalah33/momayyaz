<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $table='details_of_trip';
    protected $fillable = [
        'country_id',
        'first_day',
        'second_day',
        'third_day',
        'fourth_day',
        'fifth_day',
        'trip_includes',
        'trip_does_not_include'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickt extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nationality',
        'country',
        'phone',
        'email',
        'date_of_arrival',
        'departure_date',
        'booking_type',
        'number_of_adults',
        'number_of_children',
        'other_details',
    ];
}

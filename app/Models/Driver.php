<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'name',
        'license_number',
        'birth_of_date',
        'place_of_birth',
        'address',
        'phone',
        'email',
        'is_active',
    ];
}

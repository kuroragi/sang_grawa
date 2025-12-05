<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PtAngkot extends Model
{
    protected $fillable = [
        'name',
        'owner',
        'address',
        'phone',
        'email',
        'fax',
        'is_active',
        'logo_path',
    ];

    
}

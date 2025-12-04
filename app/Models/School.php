<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kuroragi\GeneralHelper\Traits\Blameable;

class School extends Model
{
    use SoftDeletes, Blameable;

    protected $fillable = [
        'name',
        'npsn',
        'level',
        'headmaster',
        'address',
        'kelurahan',
        'kecamatan',
        'propinsi',
        'zip_code',
        'phone',
        'email',
        'fax',
        'status',
        'is_active',
        'logo_path',
    ];
}

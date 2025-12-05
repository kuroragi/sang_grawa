<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kuroragi\GeneralHelper\Traits\Blameable;

class Route extends Model
{
    use SoftDeletes, Blameable;
    
    protected $fillable = [
        'name',
        'description',
        'is_active',
        'coordinates',
    ];
}

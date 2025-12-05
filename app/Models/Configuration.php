<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kuroragi\GeneralHelper\Traits\Blameable;

class Configuration extends Model
{
    use SoftDeletes, Blameable;
    
    protected $fillable = [
        'start_morning',
        'end_morning',
        'start_afternoon',
        'end_afternoon',
    ];
}

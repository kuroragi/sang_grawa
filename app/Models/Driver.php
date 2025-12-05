<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kuroragi\GeneralHelper\Traits\Blameable;

class Driver extends Model
{
    use SoftDeletes, Blameable;
    protected $fillable = [
        'name',
        'id_angkot',
        'license_number',
        'birth_of_date',
        'place_of_birth',
        'address',
        'phone',
        'email',
        'is_active',
    ];

    /**
     * Get the angkot that owns the Driver
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function angkot(): BelongsTo
    {
        return $this->belongsTo(Angkot::class, 'id_angkot');
    }
}

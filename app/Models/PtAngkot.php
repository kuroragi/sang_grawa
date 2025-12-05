<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    /**
     * Get all of the angkots for the PtAngkot
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function angkots(): HasMany
    {
        return $this->hasMany(Angkot::class, 'id_pt_angkot');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Angkot extends Model
{
    protected $fillable = [
        'name',
        'id_pt_angkot',
        'police_number',
        'brand',
        'type',
        'color',
        'year',
        'fuel_type',
        'condition',
        'is_active',
    ];

    /**
     * Get the pt that owns the Angkot
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pt(): BelongsTo
    {
        return $this->belongsTo(PtAngkot::class, 'id_pt_angkot');
    }
}

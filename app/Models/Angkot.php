<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kuroragi\GeneralHelper\Traits\Blameable;

class Angkot extends Model
{
    use SoftDeletes, Blameable;
    
    protected $fillable = [
        'name',
        'id_pt_angkot',
        'id_route',
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

    /**
     * Get the route that owns the Angkot
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function route(): BelongsTo
    {
        return $this->belongsTo(Route::class, 'id_route');
    }

    /**
     * Get all of the drivers for the Angkot
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function drivers(): HasMany
    {
        return $this->hasMany(Driver::class, 'id_angkot');
    }
}

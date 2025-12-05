<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kuroragi\GeneralHelper\Traits\Blameable;

class Student extends Model
{
    use SoftDeletes, Blameable;
    protected $fillable = [
        'nisn',
        'name',
        'id_school',
        'birth_of_date',
        'place_of_birth',
        'gender',
        'address',
        'phone',
        'email',
        'status',
        'is_active',
    ];

    /**
     * Get the school that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class, 'id_school');
    }
}

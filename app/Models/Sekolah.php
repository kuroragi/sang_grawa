<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kuroragi\GeneralHelper\Traits\Blameable;

class Sekolah extends Model
{
    use SoftDeletes, Blameable;
    
    protected $fillable = [
        'npsn',
        'nama_sekolah',
        'alamat_sekolah',
        'kelurahan_sekolah',
        'kecamatan_sekolah',
        'kota_sekolah',
        'logo_sekolah',
    ];
}

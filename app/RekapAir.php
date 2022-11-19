<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekapAir extends Model
{
    protected $table = 'rekap_air';
    protected $fillable = [
        'id_pdam', 'nik', 'memo', 'tgl_byr', 'bayar', 'total_byr'
    ];
}

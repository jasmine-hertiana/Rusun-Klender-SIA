<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekapPulsa extends Model
{
    protected $table = 'rekap_pulsa';
    protected $fillable = [
        'id_pls', 'nik', 'memo', 'tgl_byr', 'bayar', 'total_byr'
    ];
}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekapListrik extends Model
{
    protected $table = 'rekap_listrik';
    protected $fillable = [
        'id_pln', 'nik', 'memo', 'tgl_byr', 'bayar', 'total_byr'
    ];
}

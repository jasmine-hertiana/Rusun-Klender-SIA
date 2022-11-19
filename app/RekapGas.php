<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekapGas extends Model
{
    protected $table = 'rekap_gas';
    protected $fillable = [
        'id_pgn', 'nik', 'memo', 'tgl_byr', 'bayar', 'total_byr'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gas extends Model
{
    protected $table = "gas";
    protected $fillable = [
        'id_pgn','no_seri','nik','nama','alamat','notelp','memo','tgl_byr','bayar'
    ];
}

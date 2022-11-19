<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listrik extends Model
{
    protected $table = "listrik";
    protected $fillable = [
        'id_pln','no_seri','nik','nama','alamat','notelp','memo','tgl_byr','bayar'
    ];
}

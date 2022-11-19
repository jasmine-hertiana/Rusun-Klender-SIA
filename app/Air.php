<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Air extends Model
{
    protected $table = "air";
    protected $fillable = [
        'id_pdam','no_seri','nik','nama','alamat','notelp','memo','tgl_byr','bayar'
    ];
}

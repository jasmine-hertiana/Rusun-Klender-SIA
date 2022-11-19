<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pulsa extends Model
{
    protected $table = "pulsa";
    protected $fillable = [
        'id_pls','provider','nik','nama','alamat','notelp','memo','tgl_byr','bayar'
    ];
}

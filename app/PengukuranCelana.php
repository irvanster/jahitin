<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengukuranCelana extends Model
{
    protected $table = 'tb_u_celana';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'id_jahit','tanggal_input','p_celana','l_pinggang','t_panggul','l_panggul',
        't_duduk','l_pesak','l_paha','l_lutut','l_tumit',
        'lain_lain',
    ];
}

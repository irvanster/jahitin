<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengukuranBaju extends Model
{
    protected $table = 'tb_u_baju';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'id_jahit','tanggal_input','l_badan','p_lengan','l_kerung','p_bahu',
        'l_pinggang','t_panggul','l_panggul','p_sisi','p_punggung',
        'l_punggung','lain_lain',
    ];
}

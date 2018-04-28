<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesanDesainer extends Model
{
    protected $table ='tb_psn_desainer'; 
    protected $primaryKey = 'id_psn_desainer';
    protected $fillable = [
        'id_psn_desainer','tgl_pesan','id_user',
        'id_desainer','jenis_desain','deskripsi_psn',
        'aksesoris_psn','jns_jml','status_psn',
        'status_bayar'
    ];
    public $incrementing = false;
    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo(Users::class,'id_user','id_user');
    }

    public function desainer()
    {
        return $this->belongsTo(Desainer::class,'id_desainer','id_desainer');
    }
}

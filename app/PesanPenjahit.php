<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesanPenjahit extends Model
{
    protected $table ='tb_psn_penjahit'; 
    protected $primaryKey = 'id_psn_penjahit';
    protected $fillable = [
        'id_psn_penjahit','tanggal_pemesanan','id_penjahit',
        'id_user','jenis_jahitan','jumlah_jahitan',
        'deskripsi_psn','bahan_jahitan','jenis_bahan',
        'aksesoris_psn','foto1','foto2','foto3','status_psn','status_bayar'
    ];
    public $incrementing = false;
    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo(Users::class,'id_user','id_user');
    }

    public function penjahit()
    {
        return $this->belongsTo(Penjahit::class,'id_penjahit','id_penjahit');
    }
}

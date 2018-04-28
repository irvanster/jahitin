<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjahit extends Model
{
    protected $table ='tb_penjahit'; 
    protected $primaryKey = 'id_penjahit';
    protected $fillable = [
        'id_penjahit,nama_penjahit','identintas_penjahit',
        'alamat_penjahit','foto_penjahit','email_penjahit',
        'password_penjahit','telepon_penjahit','status_penjahit',
        'nilai_penjahit','jml_jht_selesai'
    ];
    public $incrementing = false;
    public $timestamps = false;

}

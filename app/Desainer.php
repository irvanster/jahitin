<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desainer extends Model
{
    protected $table ='tb_desainer'; 
    protected $primaryKey = 'id_desainer';
    protected $fillable = [
        'nama_desainer','identintas_penjahit',
        'email_desainer','password_desainer','alamat_desainer',
        'telepon_desainer','foto_desainer','status_desainer',
        'nilai_desainer','jml_dsn_selesai'
    ];
    public $incrementing = false;
    public $timestamps = false;
}

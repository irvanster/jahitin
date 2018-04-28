<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PostDesain;
use App\StatusBayar;
use App\Users;
class PesananJahitan extends Model
{
    protected $table = 'tb_jahit';
    protected $primaryKey = 'id_jahit';
    protected $fillable = [
        'id_post','id_user','jumlah_jahit','jenis_jahit','total_bayar',
        'tanggal_dipesan','status_jahitan','status_pembayaran'
    ];
    public $timestamps = false;
    public $incrementing = false;
    
    public function users()
    {
        return $this->belongsTo(Users::class,'id_user','id_user');
    }
    public function dataukurb()
    {
        return $this->belongsTo(PengukuranBaju::class,'id_jahit','id_jahit');
    }
    public function dataukurc()
    {
        return $this->belongsTo(PengukuranCelana::class,'id_jahit','id_jahit');
    }
    public function postdesain()
    {
        return $this->belongsTo(PostDesain::class,'id_post','id_post');
    }

    public function confirm()
    {
        return $this->belongsTo(ConfirmOrder::class,'id_jahit','id_jahit');
    }
}

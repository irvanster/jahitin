<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    protected $table = 'tb_cp_saran';
    protected $primaryKey = 'no';
    public $timestamps = false;
}

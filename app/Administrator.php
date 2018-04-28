<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $table = 'tb_admin';
    protected $fillable = [
        'nama_depan','nama_belakang','nama_lengkap','email','password','telepon','level'
    ];

    protected $hidden =[
        'password','remember_token'
    ];
}

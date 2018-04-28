<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'tb_admin';
    protected $fillable = [
        'nama_depan','nama_belakang','nama_lengkap','email','password','telepon','level'
    ];

    protected $hidden =[
        'password','remember_token'
    ];
}
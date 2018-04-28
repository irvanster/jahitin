<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desain extends Model
{
    protected $table = 'tb_post_desain';
    public $timestamps = false;

    public function desainer()
    {
        return $this
        ->belongsTo(User::class, 'id_desainer','id');
    }

}

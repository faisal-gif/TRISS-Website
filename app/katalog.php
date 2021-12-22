<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class katalog extends Model
{
    public $fillable= ['id_barang','id_user','foto','deskripsi'];
}

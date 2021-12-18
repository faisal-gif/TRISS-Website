<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemasukan extends Model
{
    public $fillable= ['id_barang','id_user','jumlah_barang','total_harga'];
}

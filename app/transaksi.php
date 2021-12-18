<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    public $fillable= ['id_barang','id_user','jumlah_barang','total_harga'];
}

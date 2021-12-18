<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    public $fillable= ['nama_barang','id_user','ukuran','jumlah','harga_barang'];
}

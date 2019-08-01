<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $fillable = ['id_kasir', 'id_buku','jumlah','total','tanggal'];

    public $timestamps = true;

    public function buku()
    {
        return $this->belongsTo('App\buku', 'id_buku');
    }

    public function kasir()
    {
        return $this->belongsTo('App\kasir', 'id_kasir');
    }
}

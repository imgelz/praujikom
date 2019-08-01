<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasok extends Model
{
    protected $fillable = ['id_distributor', 'id_buku','jumlah','tanggal'];

    public $timestamps = true;

    public function distributor()
    {
        return $this->belongsTo('App\distributor', 'id_distributor');
    }
    public function buku()
    {
        return $this->belongsTo('App\buku', 'id_buku');
    }
}

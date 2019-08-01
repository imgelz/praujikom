<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kasir extends Model
{
    protected $fillable = ['nama', 'alamat', 'telepon','status', 'username', 'password','akses'];

    public $timestamps = true;

    public function penjualan()
    {
        return $this->hasMany('App\penjualan', 'id_kasir');
    }
}

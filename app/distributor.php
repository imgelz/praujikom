<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class distributor extends Model
{
    protected $fillable = ['nama_distributor', 'alamat', 'telepon'];

    public $timestamps = true;

    public function pasok()
    {
        return $this->hasMany('App\pasok', 'id_distributor');
    }
}

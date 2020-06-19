<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    //
    protected $guarded = [];

    public function Produk(){
        return $this->hasMany(Produk::class, 'produk_id', 'id');
    }
}

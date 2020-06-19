<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    //
    protected $guarded = [];

    public function produk(){
        return $this->hasMany(Produk::class, 'produk_id', 'id');
    }
}

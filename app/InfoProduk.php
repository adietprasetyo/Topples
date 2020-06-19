<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoProduk extends Model
{
    //
    protected $guarded=[];

    public function produk()
    {
        return $this->belongsTo('App\Produk', 'produk_id', 'id');
    }
}

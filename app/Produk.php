<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    protected $guarded = [];

    public function promo()
    {
        return $this->belongsTo(Promo::class, 'produk_id', 'id');
    }

    public function info_produk()
    {
        return $this->hasOne(InfoProduk::class, 'produk_id', 'id');
    }

    public function merk()
    {
        return $this->belongsTo(Merk::class, 'produk_id', 'id');
    }

    public function gambar()
    {
        return $this->hasOne(Gambar::class, 'produk_id', 'id');
    }

    public function ulasan()
    {
        return $this->belongsTo(Ulasan::class, 'produk_id', 'id');
    }

    public function diskusi()
    {
        return $this->belongsTo(Diskusi::class, 'produk_id', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diskusi extends Model
{
    //
    protected $guarded = [];

    public function Produk(){
        return $this->hasMany(Produk::class, 'produk_id', 'id');
    }
}

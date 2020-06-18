<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diskusi extends Model
{
    protected $guarded = [];

    public function produk()
    {
        return $this->hasMany('App\Produk', 'produk_id', 'id');
    }
}

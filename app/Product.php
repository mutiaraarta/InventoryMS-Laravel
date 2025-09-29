<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['kategori_id','nama','harga','image','qty'];

    protected $hidden = ['created_at','updated_at'];

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
}

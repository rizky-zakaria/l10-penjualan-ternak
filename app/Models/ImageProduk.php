<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageProduk extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'produk_id', 'path'];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}

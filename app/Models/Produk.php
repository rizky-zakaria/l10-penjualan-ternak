<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'harga', 'views', 'deskripsi'];

    public function image_produk()
    {
        return $this->hasOne(ImageProduk::class);
    }
}

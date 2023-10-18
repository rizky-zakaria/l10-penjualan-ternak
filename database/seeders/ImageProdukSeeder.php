<?php

namespace Database\Seeders;

use App\Models\ImageProduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 11; $i++) {
            ImageProduk::create([
                'image' => 'produk.jpg',
                'produk_id' => $i,
                'path' => 'landings/img/product/produk.jpg'
            ]);
        }
    }
}

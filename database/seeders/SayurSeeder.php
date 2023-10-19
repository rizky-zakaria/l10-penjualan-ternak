<?php

namespace Database\Seeders;

use App\Models\ImageProduk;
use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SayurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $data = Produk::create([
                'nama' => 'Sayur Kangkung',
                'harga' => 5000,
                'views' => rand(21, 999),
                'kategori' => 'sayur',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, mollitia itaque. Repellat ipsa amet quidem asperiores, voluptatibus nostrum doloribus repellendus veniam adipisci dolorem earum enim, fugit natus esse incidunt. Earum consequatur debitis quae obcaecati asperiores! Repudiandae odit esse adipisci reprehenderit rerum molestias ratione quaerat tenetur cupiditate perspiciatis numquam ipsam, dolorum in cum ullam placeat consequuntur provident fugiat consequatur illo dolore et. Labore, nobis dolorem! In illum quam maiores. Nihil eaque porro soluta explicabo dolore hic voluptatem? Quaerat itaque eos hic non earum voluptates a, unde, nesciunt facilis sint eius? Distinctio, sit debitis? Repellat, cupiditate totam fugiat porro quaerat non quisquam autem iusto aut molestiae perferendis, ducimus distinctio exercitationem, dolore veniam temporibus in neque quae molestias eos aspernatur minima maiores quo? Temporibus, vero illum, doloremque cum, harum itaque quod nulla architecto vel dolores tenetur. Suscipit quasi ratione ducimus nostrum nihil vel, architecto mollitia debitis nesciunt non aliquam recusandae accusantium. Itaque eaque quasi nemo error cum veniam sequi omnis saepe dolores? Temporibus minima vel eveniet, asperiores minus impedit velit reiciendis neque eligendi consequatur error perspiciatis reprehenderit consectetur tempore, obcaecati facere soluta maxime omnis suscipit, enim commodi nulla labore. Suscipit alias veniam repellendus voluptatem amet officiis pariatur placeat porro ad quibusdam maiores, consequuntur inventore perspiciatis nemo qui, debitis quasi esse doloremque iure! Harum itaque ea expedita.'
            ]);

            ImageProduk::create([
                'image' => 'sayur.jpeg',
                'produk_id' => $data->id,
                'path' => 'landings/img/product/sayur.jpeg'
            ]);
        }
    }
}

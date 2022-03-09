<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'produk' => 'Casual Boots hiking',
                'gambar' => 'product_01.jpg',
                'content' => 'Hipzo Original Produk Kebanggaan anak bangsa dengan Kualitas International Model dan design Elegan dan Kekinian.',
                'harga' => '$30.25'
            ],
            [
                'produk' => 'Heuvel Tribe Beanie ',
                'gambar' => 'product_02.jpg',
                'content' => 'Topi Kupluk terbaru dan termurah dibuat dari benang katun terbaik import dan di rajut oleh pengrajin pilihan ',
                'harga' => '$20.45'
            ],
            [
                'produk' => 'Vertikal Silver Silk Syall',
                'gambar' => 'product_03.jpg',
                'content' => 'Sempurna untuk pemaikan biasa, harian, pernikahan dan acara bahan yang ringan tetap membuat anda nyaman ',
                'harga' => '$15.25'
            ],
            [
                'produk' => 'Snow Minky Doll',
                'gambar' => 'product_04.jpg',
                'content' => 'Minky dolls Baby Loop di desain khusus untuk menjadi teman bermain si Kecil',
                'harga' => '$12.50'
            ],
            [
                'produk' => 'Vintage House Cross Crop',
                'gambar' => 'product_05.jpg',
                'content' => 'Premium Knitwear Specialist Est. 2014',
                'harga' => '$30.50'
            ],
            [
                'produk' => 'dekor christmas edition',
                'gambar' => 'product_06.jpg',
                'content' => 'Boneka gantungan pohon natal ini memiliki ukuran cukup besar dengan desain yang sangat lucu',
                'harga' => '$22.50'
            ]
        ];
        DB::table('produks')->insert($data);
           
    }
}

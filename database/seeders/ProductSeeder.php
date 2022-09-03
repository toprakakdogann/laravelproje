<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /*
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            'ply_id' => 1,
            'commission_rate' => mt_rand(1,100),
            'discount_rate' => mt_rand(1,100),
            'name' => Str::random(10),
            'description' => Str::random(60),
            'price' => 80,
            'currency' => 'TL',
            'developer_name' => 'Toprak Akdogan',
            'publisher_name' => 'Toprak Akdogan',
            'merchant_id' => 1,
        ]);
    }
}

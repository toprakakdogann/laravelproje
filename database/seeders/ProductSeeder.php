<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /*
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'commission_rate' => floatval('10.00'),
            'discount_rate' => floatval('20.00'),
            'name' => Str::random(10),
            'description' => Str::random(60),
            'price' => floatval('80.00'),
            'currency' => Hash::make('TL'),
            'developer_name' => Hash::make('Toprak Akdogan'),
            'publisher_name' => Hash::make('Toprak Akdogan'),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'iPhone 13 128 Gb Starlight',
                'short_description' => 'Экран: 6,1" OLED 1170x2532 процессор: Apple A15 Bionic ОС: iOS 15 аккумулятор: несъемный камера: 12 (f/1.6, широкоугольная) + 12 (f/2.4, 120 градусов, сверхширокоугольная) Мп NFC: + (Apple Pay)'
            ],
            [
                'name' => 'Apple iPad Air Wi-Fi 256GB Green',
                'short_description' => 'Диагональ экрана в дюймах 10.9\r\nРазрешение экрана Liquid Retina\r\nПроцессор Apple A14\r\nПлатформа iOS'
            ],
            [
                'name' => 'MacBook Air M1 13" 256GB Gold',
                'short_description' => 'Чип Apple M1 с 8‑ядерным процессором, 7‑ядерным графическим процессором и 16‑ядерной системой Neural Engine\r\n8 ГБ объединённой памяти\r\nТрекпад Force Touch\r\nДва порта Thunderbolt/USB 4'
            ]
        ];

        foreach ($products as $product)
            DB::table('product')->insert([
                'name' => $product['name'],
                'short_description' => $product['short_description']
            ]);
    }
}

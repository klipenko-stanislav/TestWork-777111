<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productCategories = [
            [
                'product_id' => 1, // iPhone 13 128 Gb Starlight
                'category_id' => 1 // Смартфоны
            ],
            [
                'product_id' => 1, // iPhone 13 128 Gb Starlight
                'category_id' => 4 // Смартфоны Apple
            ],
            [
                'product_id' => 2, // Apple iPad Air Wi-Fi 256GB Green
                'category_id' => 2 // Планшеты
            ],
            [
                'product_id' => 3, // MacBook Air M1 13" 256GB Gold
                'category_id' => 3 // Ноутбуки
            ]
        ];

        foreach ($productCategories as $productCategory)
            DB::table('product_category')->insert([
                'product_id' => $productCategory['product_id'],
                'category_id' => $productCategory['category_id']
            ]);
    }
}

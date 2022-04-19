<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Смартфоны',
            'Планшеты',
            'Ноутбуки',
            'Смартфоны Apple'
        ];

        foreach ($categories as $category)
            DB::table('category')->insert([
                'name' => $category
            ]);
    }
}

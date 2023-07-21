<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Fontanería',
            'Electricidad',
            'Pintura',
            'Cerrajería',
            // Agrega más categorías si es necesario
        ];

        foreach ($categories as $categoryName) {
            DB::table('categories')->insert([
                'name' => $categoryName,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

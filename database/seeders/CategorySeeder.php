<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=> 'Озирование',
        ]);
        Category::create([
            'name'=> 'Уборка',
        ]);
        Category::create([
            'name'=> 'Химчистка мебели',
        ]);
        Category::create([
            'name'=> 'Уборка офиса',
        ]);
        Category::create([
            'name'=> 'Чистота',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            [
                'name' => 'Hoa mi',
                'type' => 1,
                'image' => 'categories/59d598102d4e74011f7dc528b4b17812.jpeg'
            ],
            [
                'name' => 'Hot trong mua',
                'type' => 2,
                'image' => 'categories/59d598102d4e74011f7dc528b4b17812.jpeg'
            ],
            [
                'name' => 'Binh Minh',
                'type' => 1,
                'image' => 'categories/59d598102d4e74011f7dc528b4b17812.jpeg'
            ],
            [
                'name' => 'Den muon',
                'type' => 2,
                'image' => 'categories/59d598102d4e74011f7dc528b4b17812.jpeg'
            ],
            [
                'name' => 'Hat nua',
                'type' => 1,
                'image' => 'categories/59d598102d4e74011f7dc528b4b17812.jpeg'
            ],
            [
                'name' => 'Di em',
                'type' => 2,
                'image' => 'categories/59d598102d4e74011f7dc528b4b17812.jpeg'
            ],
        ];
        foreach ($arr as $value) {
            Category::query()->updateOrCreate([
                'name' => $value['name'],
            ], $value);
        }
    }
}

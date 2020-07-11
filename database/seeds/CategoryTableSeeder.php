<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::firstOrNew([
            'slug' => 'category-1',
        ]);
        if (!$category->exists) {
            $category->fill([
                'name' => 'Category 1',
            ])->save();
        }

        $category = Category::firstOrNew([
            'slug' => 'category-2',
        ]);
        if (!$category->exists) {
            $category->fill([
                'name' => 'Category 2',
            ])->save();
        }

        $category = Category::firstOrNew([
            'slug' => 'category-3',
        ]);
        if (!$category->exists) {
            $category->fill([
                'name' => 'Category 3',
            ])->save();
        }

        $category = Category::firstOrNew([
            'slug' => 'category-4',
        ]);
        if (!$category->exists) {
            $category->fill([
                'name' => 'Category 4',
            ])->save();
        }

        $category = Category::firstOrNew([
            'slug' => 'category-5',
        ]);
        if (!$category->exists) {
            $category->fill([
                'name' => 'Category 5',
            ])->save();
        }

        $category = Category::firstOrNew([
            'slug' => 'category-6',
        ]);
        if (!$category->exists) {
            $category->fill([
                'name' => 'Category 6',
            ])->save();
        }

        $category = Category::firstOrNew([
            'slug' => 'category-7',
        ]);
        if (!$category->exists) {
            $category->fill([
                'name' => 'Category 7',
            ])->save();
        }
    }
}

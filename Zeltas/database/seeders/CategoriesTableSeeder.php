<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(1)->create([
            'name' => 'Rings',
            'slug' => 'rings',
            'parent_id' => 1,
        ]);

        Category::factory(1)->create([
            'name' => 'Necklaces',
            'slug' => 'necklaces',
            'parent_id' => 2,
        ]);

        Category::factory(1)->create([
            'name' => 'Bracelets',
            'slug' => 'bracelets',
            'parent_id' => 3,
        ]);

        Category::factory(1)->create([
            'name' => 'Sculptures',
            'slug' => 'sculptures',
            'parent_id' => 4,
        ]);
    }
}

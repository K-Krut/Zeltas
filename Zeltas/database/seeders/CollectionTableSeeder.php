<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collection::factory(1)->create([
            'name' => 'Viking gods',
            'slug' => 'viking_gods',
        ]);

//        Collection::factory(1)->create([
//            'name' => 'Viking bracelet Asgard',
//            'slug' => 'viking_bracelet_asgard',
//        ]);
//
//        Collection::factory(1)->create([
//            'name' => 'Viking bracelet Midgard',
//            'slug' => 'viking_bracelet_midgard',
//        ]);

        Collection::factory(1)->create([
            'name' => 'Vikings',
            'slug' => 'vikings',
        ]);

        Collection::factory(1)->create([
            'name' => 'Animals',
            'slug' => 'animals',
        ]);

        Collection::factory(1)->create([
            'name' => 'Maori',
            'slug' => 'maori',
        ]);

        Collection::factory(1)->create([
            'name' => 'Other',
            'slug' => 'other',
        ]);
    }
}

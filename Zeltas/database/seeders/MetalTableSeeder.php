<?php

namespace Database\Seeders;


use App\Models\Metal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Metal::factory(1)->create([
            'name' => 'Bronze',
            'slug' => 'bronze',
        ]);

        Metal::factory(1)->create([
            'name' => 'Silver',
            'slug' => 'silver',
        ]);

        Metal::factory(1)->create([
            'name' => 'Pewter',
            'slug' => 'pewter',
        ]);

        Metal::factory(1)->create([
            'name' => 'Golden silver',
            'slug' => 'golden_silver',
        ]);

        Metal::factory(1)->create([
            'name' => 'Silver plated Bronze',
            'slug' => 'silver_plated_bronze',
        ]);
    }
}

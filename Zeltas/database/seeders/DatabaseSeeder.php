<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\Metal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);

        AdminUser::factory(1)->create([
            'name' => 'Admin',
            'email' => 'kkrut4292@gmail.com',
            'password' => bcrypt('kek845')
        ]);

        $this->call(CategoriesTableSeeder::class);
        $this->call(CollectionTableSeeder::class);
        $this->call(MaterialTableSeeder::class);
    }
}

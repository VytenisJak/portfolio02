<?php

namespace Database\Seeders;

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
                //categories::factory()->count(4)->create();
                $this->call([
                    CategoriesSeeder::class,
                    GoodsSeeder::class,
                ]);
    }
}

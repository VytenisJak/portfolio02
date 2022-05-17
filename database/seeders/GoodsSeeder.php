<?php

namespace Database\Seeders;
use App\Models\goods;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        goods::factory()->count(20)->create();
    }
}

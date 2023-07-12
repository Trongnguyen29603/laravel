<?php

namespace Database\Seeders;

use App\Models\Catregory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatregorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catregory::factory()->count(20)->create();
    }
}

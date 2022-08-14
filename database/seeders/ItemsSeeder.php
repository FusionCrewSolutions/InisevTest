<?php

namespace Database\Seeders;

use App\Models\items;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        items::factory()
            ->count(10)
            ->create();
    }
}

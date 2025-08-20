<?php

namespace Database\Seeders\API;

use App\Models\API\Block;
use Illuminate\Database\Seeder;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Block::factory(20)->create();
    }
}

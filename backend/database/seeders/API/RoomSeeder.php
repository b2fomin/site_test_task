<?php

namespace Database\Seeders\API;

use App\Models\API\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Room::factory(1000)->create();
    }
}

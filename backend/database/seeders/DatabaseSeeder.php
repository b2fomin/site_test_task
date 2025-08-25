<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\API\BlockSeeder;
use Database\Seeders\API\JobSeeder;
use Database\Seeders\API\ProjectSeeder;
use Database\Seeders\API\RoomSeeder;
use Database\Seeders\API\TaskSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(TaskSeeder::class)
             ->call(ProjectSeeder::class)
             ->call(BlockSeeder::class)
             ->call(RoomSeeder::class)
             ->call(JobSeeder::class);
    }
}

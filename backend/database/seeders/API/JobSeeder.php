<?php

namespace Database\Seeders\API;

use App\Models\API\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::factory(1000)->create();
    }
}

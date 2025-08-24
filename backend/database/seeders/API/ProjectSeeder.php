<?php

namespace Database\Seeders\API;

use App\Models\API\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::factory(1000)->create();
    }
}

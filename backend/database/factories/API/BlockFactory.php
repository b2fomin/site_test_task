<?php

namespace Database\Factories\API;

use App\Models\API\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'floor_start' => $this->faker->numberBetween(1,10),
            'floor_end' => $this->faker->numberBetween(1,10),
            'project_id' => $this->faker->numberBetween(1, Project::count()),
        ];
    }
}

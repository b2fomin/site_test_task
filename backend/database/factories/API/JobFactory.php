<?php

namespace Database\Factories\API;

use App\Models\API\Block;
use App\Models\API\Project;
use App\Models\API\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'block_id' => $this->faker->numberBetween(1, Block::count()),
            'project_id'=> $this->faker->numberBetween(1, Project::count()),
            'floor' => $this->faker->randomDigit(),
            'room_id' => $this->faker->numberBetween(1, Room::count()),
            'executor' => $this->faker->text(20),
            'date_start' => $this->faker->dateTime(),
            'date_end' => $this->faker->dateTime(),
            'status' => $this->faker->randomElement(['processing', 'done'])
        ];
    }
}

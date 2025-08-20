<?php

namespace Database\Factories\API;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->word(),
            'name' => $this->faker->name(),
            'icon' => $this->faker->imageUrl(),
            'description' => $this->faker->text(),
            'contractor' => $this->faker->name(),
            'address' => $this->faker->address(),
            'date_start' => $this->faker->date(),
            'date_end' => $this->faker->date(),
            'budget' => $this->faker->randomFloat(),
        ];
    }
}

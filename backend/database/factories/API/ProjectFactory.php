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
            'code' => $this->faker->unique()->uuid(),
            'name' => $this->faker->name(),
            'icon' => $this->faker->imageUrl(),
            'description' => $this->faker->text(),
            'contractor' => $this->faker->name(),
            'address' => $this->faker->address(),
            'date_start' => $this->faker->dateTimeBetween('-3 months', 'now'),
            'date_end' => $this->faker->dateTimeBetween('-3 months', '+ 3 months'),
            'budget' => $this->faker->randomFloat(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Technology>
 */
class TechnologyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    $uniqueSuffix = $this->faker->unique()->randomNumber();

    return [
        "name" => "Technology_" . $uniqueSuffix,
        "description" => $this->faker->paragraph(),
    ];
}

}
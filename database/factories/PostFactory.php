<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      //title, description, student_id
      'title' => $this->faker->sentence,
      'description' => $this->faker->paragraph,
      'student_id' => $this->faker->numberBetween(1, 10),
    ];
  }
}
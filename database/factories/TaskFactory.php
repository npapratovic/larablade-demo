<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    protected $model = \App\Models\Task::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'status' => $this->faker->randomElement(['pending', 'completed', 'in-progress']),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high']),
            'assigned_to' => $this->faker->randomElement(['user1', 'user2', 'user3']),
            'created_by' => $this->faker->randomElement(['admin', 'user1', 'user2']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
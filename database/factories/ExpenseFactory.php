<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type'         => fake()->word(),
            'amount'       => fake()->randomFloat(2, 50, 1000),
            'description'  => fake()->sentence(3),
            'expense_date' => fake()->dateTimeBetween('-1 week', '+1 week'),
        ];
    }
}

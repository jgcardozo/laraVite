<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=> fake()->name(),
            "email"=> fake()->unique()->safeEmail(),
            "address"=> fake()->address(),
            "birth"=> fake()->dateTimeBetween('-30 years', 'now',null),
            "ip"=> fake()->ipv4(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'concept' => $this->faker->company(),
            'discount'=> $this->faker->catchPhrase(),
            'price' => $this->faker->randomNumber(2),
            'user_id' => 2
        ];
    }
}

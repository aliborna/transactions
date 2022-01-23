<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code'    => $this->faker->unique()->regexify('T_[0-9]{3}_[a-z]{9}'),
            'amount'   => $this->faker->randomFloat(2, 2, 4),
            'user_id' => \App\Models\User::factory()->create()->id
        ];
    }
}

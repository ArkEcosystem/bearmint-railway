<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'address'    => $this->faker->regexify('[A-Za-z0-9]{40}'),
            'public_key' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'name'       => $this->faker->regexify('[A-Za-z0-9]{8}'),
            'nonce'      => $this->faker->randomNumber(8),
            'balances'   => [
                'BEAR' => $this->faker->randomNumber(8),
                'FIRE' => $this->faker->randomNumber(8),
                'GOLD' => $this->faker->randomNumber(8),
                'SEED' => $this->faker->randomNumber(8),
            ],
            'locked_balances' => [
                'BEAR' => $this->faker->randomNumber(8),
                'FIRE' => $this->faker->randomNumber(8),
                'GOLD' => $this->faker->randomNumber(8),
                'SEED' => $this->faker->randomNumber(8),
            ],
            'stakes' => [
                'Buckley' => $this->faker->randomNumber(8),
            ],
            'validator' => [
                'address'   => $this->faker->regexify('[A-Za-z0-9]{40}'),
                'power'     => $this->faker->randomNumber(8),
                'publicKey' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            ],
            'metadata' => [
                'key' => $this->faker->regexify('[A-Za-z0-9]{32}'),
            ],
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Block;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'block_id'             => Block::factory(),
            'hash'                 => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'sender'               => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'recipient'            => $this->faker->regexify('[A-Za-z0-9]{32}'),
            'gas'                  => $this->faker->randomNumber(8),
            'nonce'                => $this->faker->randomNumber(8),
            'signature'            => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'version'              => '1.0.0',
            'message'              => [],
            'message_deserialized' => [],
        ];
    }
}

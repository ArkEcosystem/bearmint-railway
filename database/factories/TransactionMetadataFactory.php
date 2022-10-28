<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TransactionMetadata>
 */
class TransactionMetadataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'transaction_id' => Transaction::factory(),
            'module'         => $this->faker->regexify('[A-Za-z0-9]{32}'),
            'key'            => $this->faker->regexify('[A-Za-z0-9]{16}'),
            'value'          => $this->faker->regexify('[A-Za-z0-9]{16}'),
        ];
    }
}

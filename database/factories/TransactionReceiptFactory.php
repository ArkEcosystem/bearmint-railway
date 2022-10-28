<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TransactionReceipt>
 */
class TransactionReceiptFactory extends Factory
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
            'block_hash'     => base64_encode($this->faker->regexify('[A-Za-z0-9]{32}')),
            'block_number'   => $this->faker->randomNumber(8),
            'logs'           => [],
        ];
    }
}

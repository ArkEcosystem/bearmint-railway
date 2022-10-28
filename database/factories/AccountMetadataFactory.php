<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AccountMetadata>
 */
class AccountMetadataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'account_id' => Account::factory(),
            'module'     => $this->faker->regexify('[A-Za-z0-9]{32}'),
            'key'        => $this->faker->regexify('[A-Za-z0-9]{16}'),
            'value'      => [],
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Block>
 */
class BlockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'hash'                 => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'height'               => $this->faker->randomNumber(8),
            'header'               => [],
            'byzantine_validators' => [],
            'last_commit_info'     => [],
        ];
    }
}

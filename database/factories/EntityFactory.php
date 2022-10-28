<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entity>
 */
class EntityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'module' => $this->faker->regexify('[A-Za-z0-9]{32}'),
            'type'   => $this->faker->regexify('[A-Za-z0-9]{16}'),
            'key'    => $this->faker->regexify('[A-Za-z0-9]{16}'),
            'value'  => $this->faker->regexify('[A-Za-z0-9]{16}'),
        ];
    }
}

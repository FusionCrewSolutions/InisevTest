<?php

namespace Database\Factories;

use App\Models\items;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\items>
 */
class ItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'itemName' => $this->faker->name(),
            'itemDesc' => $this->faker->text($maxNbChars = 50)
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Website>
 */
class WebsiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //id, webName, webDesc

        return [
            'webName' => $this->faker->url(),
            'webDesc' => $this->faker->text($maxNbChars = 50)
        ];
    }
}

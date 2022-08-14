<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Website;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthorPost>
 */
class AuthorPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //id, postTitle, postDesc, autName, webID

        return [
            'postTitle' => $this->faker->text($maxNbChars = 20),
            'postDesc' => $this->faker->text($maxNbChars = 50),
            'autName' => $this->faker->name(),
            'webID' => Website::factory()
        ];
    }
}

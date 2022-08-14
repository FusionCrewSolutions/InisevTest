<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Website;
use App\Models\Subscriber;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubToWeb>
 */
class SubToWebFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //subID, WebID

         return [
            'subID' => Subscriber::factory();,
            'WebID' => Website::factory();
        ];
    }
}

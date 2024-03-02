<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Termwind\Html\InheritStyles;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Priests>
 */
class PriestsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstNameMale(),
           'surname'=>$this->faker->lastName('MALE'),
            'rank'=>$this->faker->numberBetween(1,4),
            'parish'=>$this->faker->address,
            'age' =>$this->faker->numberBetween(20,80),
            'email'=>$this->faker->email(),
            'phone_number'=>$this->faker->phoneNumber(),
            'verified' =>$this->faker->boolean('50'),
        ];
    }
}

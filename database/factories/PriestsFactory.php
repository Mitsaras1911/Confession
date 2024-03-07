<?php

namespace Database\Factories;

use App\Models\User;
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
            'user_id' => User::factory(),
            'name' => $this->faker->firstNameMale(),
            'surname'=>$this->faker->lastName('MALE'),
            'rank'=>$this->faker->numberBetween(1,4),
            'parish'=>$this->faker->address,
            'age' =>$this->faker->numberBetween(20,80),
            'phone_number'=>$this->faker->phoneNumber(),
            'church_name'=>$this->faker->city(),
            'verified_by_admin' =>$this->faker->boolean('50'),
        ];
    }
}

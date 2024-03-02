<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointments>
 */
class AppointmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'confessor_name' =>$this->faker->name().$this->faker->lastName(),
            'phone_number'=>$this->faker->phoneNumber(),
            'date'=>$this->faker->date('dd/mm/YYYY'),
            'time'=>$this->faker->time('H:i:s'),
            'slot_count'=>$this->faker->numberBetween(1,2),
            'status'=>$this->faker->randomElement(['V','P','A'])
        ];
    }
}

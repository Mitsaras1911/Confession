<?php

namespace Database\Factories;

use App\Models\Priests;
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
            'priest_id'=> Priests::factory(),
            'confessor_name' =>$this->faker->name(),
            'phone_number'=>$this->faker->phoneNumber(),
            'date'=>$this->faker->date('d/m/Y'),
            'time'=>$this->faker->time('H:i:s'),
            'slot_count'=>$this->faker->numberBetween(1,2),
            'status'=>$this->faker->randomElement(['D','P','A']),
            'response_message'=>$this->faker->text(100),
        ];
    }
}

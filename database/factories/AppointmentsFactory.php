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
        // Generate a random phone number with country code
        $phoneNumber = $this->faker->phoneNumber;

        // Modify the phone number to fit the format of Cyprus numbers
        // Cyprus phone numbers start with +357 followed by 8 digits
        $cyprusPhoneNumber = '+357' . substr(preg_replace('/[^0-9]/', '', $phoneNumber), -8);


        return [
            'priest_id'=> Priests::factory(),
            'confessorName' =>$this->faker->name(),
            'phoneNumber'=> $cyprusPhoneNumber,
            'date'=>$this->faker->date('d/m/Y'),
            'time'=>$this->faker->time('H:i:s'),
            'slotCount'=>$this->faker->numberBetween(1,2),
        ];
    }
}

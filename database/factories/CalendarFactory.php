<?php

namespace Database\Factories;

use App\Models\Priests;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Calendar>
 */
class CalendarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'priest_id'=>Priests::factory(),
            'location'=>$this->faker->streetName(),
            'date' => $this->faker->date('dd/mm/YYYY'),
            'slot_size' => $this->faker->randomElement([15, 30, 45]),
            'disabled' => $this->faker->boolean(),
            'starting_at' => $this->faker->time('H:i:s'),
            'ending_at' => $this->faker->time('H:i:s'),
        ];
    }
}

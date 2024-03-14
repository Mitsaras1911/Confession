<?php

namespace Database\Factories;

use App\Models\Calendar;
use App\Models\Priests;
use App\Models\User;
use Carbon\Carbon;
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
        // Generate a random phone number with country code
        $phoneNumber = $this->faker->phoneNumber;

        // Modify the phone number to fit the format of Cyprus numbers
        // Cyprus phone numbers start with +357 followed by 8 digits
        $cyprusPhoneNumber = '+357' . substr(preg_replace('/[^0-9]/', '', $phoneNumber), -8);


        return [
            'user_id' => User::factory(),
            'name' => $this->faker->firstNameMale(),
            'surname' => $this->faker->lastName('MALE'),
            'rank' => $this->faker->randomElement(['1','2','3','4']),
            'parish' => $this->faker->address,
            'age' => $this->faker->numberBetween(20, 80),
            'phoneNumber' => $cyprusPhoneNumber,
            'churchName' => $this->faker->city(),
            'verifiedByAdmin' => FALSE
        ];
    }

    public function configure()
    {
        {
            return $this->afterCreating(function (Priests $priest) {
                // Get the start and end of the current month
                $startDate = Carbon::now()->startOfMonth();
                $endDate = Carbon::now()->endOfMonth();
                $startTime = Carbon::now()->startOfDay()->toTimeString();
                $endTime = Carbon::now()->endOfDay()->toTimeString();

                // Iterate over each day of the month
                $currentDate = $startDate;
                while ($currentDate <= $endDate) {
                    // Create record in another table for each day
                    Calendar::create([
                        'priest_id' => $priest->id,
                        'date' => $currentDate,
                        'location'=>$this->faker->streetName(),
                        'slotSize' => $this->faker->randomElement([15, 30, 45]),
                        'disabled' => $this->faker->boolean(),
                        'startingTimeAt' => $startTime,
                        'endingTimeAt' => $endTime,
                    ]);

                    // Move to the next day
                    $currentDate->addDay();
                }
            });
        }

    }
}



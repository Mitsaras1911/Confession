<?php

namespace Database\Seeders;

use App\Models\Priests;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Priests::factory()
            ->count(50)
            ->create();

    }
}

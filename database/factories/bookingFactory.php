<?php

namespace Database\Factories;

use App\Models\doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class bookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name'=>fake()->name(),
            'email'=>fake()->email(),
            'phone'=>fake()->phoneNumber(),
            'date'=>fake()->date(),
            // 'doctor_id'=>fake()->numberBetween(1,40),
            'doctor_id'=>doctor::inRandomOrder()->first()->id,

        ];
    }
}

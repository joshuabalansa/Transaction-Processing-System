<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => $faker->firstName,
            'middlename' => $faker->firstName,
            'lastname' => $faker->lastName,
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'email' => $faker->unique()->safeEmail,
            'birthdate' => $faker->date(),
            'role' => $faker->jobTitle,
            'salary' => $faker->randomFloat(2, 1000, 10000),
            'emergency_number' => $faker->phoneNumber,
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $password = 'admin123';

        return [
            'abha_number' => $this->faker->unique()->numberBetween(1000000000000000, 9999999999999999),
            'aadhar_number' => $this->faker->unique()->numberBetween(100000000000, 999999999999),
            'name' => $this->faker->unique()->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->numerify('##########'), // Assuming 10-digit phone number
            'dob' => $this->faker->date,
            'password' => Hash::make($password), 
        ];
    }
    public function unverified(): static{
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

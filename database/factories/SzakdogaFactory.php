<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Szakdoga>
 */
class SzakdogaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $vezeteknev = ['Szabó', 'Tóth', 'Virág', 'Szikora', 'Váradi'];
        $keresztnev = ['Kitti', 'Zsófi', 'Péter', 'Lajos', 'Enikő'];

        return [
            'szakdoga_nev' => fake()->words(3, true),
            'githublink' => 'https://github.com/' . fake()->userName(),
            'oldallink' => fake()->word() . '.com',
            'tagokneve' => $this->faker->randomElement($vezeteknev) . ' ' . $this->faker->randomElement($keresztnev) . ', ' . 
            $this->faker->randomElement($vezeteknev) . ' ' . $this->faker->randomElement($keresztnev) . ', ' . 
            $this->faker->randomElement($vezeteknev) . ' ' . $this->faker->randomElement($keresztnev)
        ];
    }
}

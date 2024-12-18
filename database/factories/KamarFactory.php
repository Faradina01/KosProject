<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kamar>
 */
class KamarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nomor_kamar' => $this->faker->unique()->numberBetween(101, 500),
            'jenis_kamar' => $this->faker->randomElement(['KamarMandiDalam', 'KamarMandiLuar']),
            'harga_kamar' => $this->faker->randomFloat(700, 750, 850),
            'status_kamar' => $this->faker->randomElement(['Tersedia', 'Terisi']),
            'deskripsi_kamar' => $this->faker->sentence,
        ];
    }
}

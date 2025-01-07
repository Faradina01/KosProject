<?php

namespace Database\Factories;

use App\Models\Kamar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penyewa>
 */
class PenyewaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_penyewa' => $this->faker->name,
            'nomor_hp' => $this->faker->phoneNumber,
            'alamat' => $this->faker->address,
            'tanggal_masuk' => $this->faker->date,
            'tanggal_berakhir' => $this->faker->date,
            'id_kamar' => $this->faker->randomNumber(),
            'status_penyewa' => $this->faker->randomElement(['Aktif', 'Selesai']),
        ];
    }


}

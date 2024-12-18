<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengelola>
 */
class PengelolaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_pengelola' => $this->faker->name,
            'kontak_pengelola' => $this->faker->phoneNumber,
            'alamat' => $this->faker->address,
            'username' => $this->faker->userName,
            'password' => bcrypt('password'),
        ];
    }
}

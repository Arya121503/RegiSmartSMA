<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    protected $model = Siswa::class;

    public function definition()
    {
        return [
            'nama_lengkap' => $this->faker->name,
            'tempat_tanggal_lahir' => $this->faker->city . ', ' . $this->faker->date,
            'alamat' => $this->faker->address,
            'no_hp' => $this->faker->phoneNumber,
            'nama_ayah' => $this->faker->name('male'),
            'nama_ibu' => $this->faker->name('female'),
            'asal_sekolah' => $this->faker->company,
        ];
    }
}

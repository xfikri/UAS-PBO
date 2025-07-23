<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nama;

class NamaSeeder extends Seeder
{
    public function run(): void
    {
        Nama::create([
            'nama' => 'Fikri Nur Wahid',
            'nim' => '20250101',
            'jurusan_id' => 1,
        ]);

        Nama::create([
            'nama' => 'Siti Aisyah',
            'nim' => '20250102',
            'jurusan_id' => 2,
        ]);

        Nama::create([
            'nama' => 'Ahmad Riza',
            'nim' => '20250103',
            'jurusan_id' => 3,
        ]);
    }
}

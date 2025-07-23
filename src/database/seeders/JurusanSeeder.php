<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        Jurusan::create(['nama' => 'Teknik Informatika']);
        Jurusan::create(['nama' => 'Sistem Informasi']);
        Jurusan::create(['nama' => 'Teknik Elektro']);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nim;

class NimSeeder extends Seeder
{
    public function run(): void
    {
        Nim::create(['nim' => '20250101']);
        Nim::create(['nim' => '20250102']);
        Nim::create(['nim' => '20250103']);
    }
}

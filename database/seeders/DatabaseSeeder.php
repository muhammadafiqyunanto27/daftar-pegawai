<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pegawai;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Pegawai::factory(20)->create();
    }
}

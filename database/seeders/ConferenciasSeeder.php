<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConferenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('conferencias')->insert([
        ['nombre' => 'AFC'],
        ['nombre' => 'NFC'],
    ]);
}
}

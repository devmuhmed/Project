<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['code' => 'NO', 'name' => 'Norway'],
            ['code' => 'FI', 'name' => 'Finland'],
            ['code' => 'SE', 'name' => 'Sweden'],
            ['code' => 'DK', 'name' => 'Denmark'],
        ]);
    }
}

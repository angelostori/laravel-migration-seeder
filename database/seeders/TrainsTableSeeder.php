<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newStudent = new Train();
        $newStudent->company = "Trenitalia";
        $newStudent->landing_station = "Roma Termini";
        $newStudent->arrival_station = "Milano Centrale";
        $newStudent->landing_time = "2024-07-01 08:00:00";
        $newStudent->arrival_time = "2024-07-01 12:00:00";
        $newStudent->code_comp = "TR";
        $newStudent->code_train = "1234";
        $newStudent->carriages = 8;
        $newStudent->platform = 18;
        $newStudent->is_on_time = true;
        $newStudent->is_aborted = false;
        $newStudent->save();
    }
}

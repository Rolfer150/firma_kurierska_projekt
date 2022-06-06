<?php

namespace Database\Seeders;

use App\Models\Wielkosc_paczki;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WielkoscSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['wielkosc' =>'Duża', 'cena' => '10'],
            ['wielkosc' =>'Średnia', 'cena' => '6'],
            ['wielkosc' =>'Mała', 'cena' => '3'],
        ];
        Wielkosc_paczki::insert($data);
    }
}

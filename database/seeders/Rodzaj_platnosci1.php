<?php

namespace Database\Seeders;

use App\Models\Rodzaj_platnosci;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Rodzaj_platnosci1 extends Seeder
{
    private static function insert(array $data)
    {
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['platnosc' =>'Przelew'],
            ['platnosc' =>'BLIK'],
            ['platnosc' =>'Karta kredytowa'],
            ['platnosc' =>'Płatność za pobraniem/przy odbiorze']
        ];
        Rodzaj_platnosci::insert($data);
    }
}

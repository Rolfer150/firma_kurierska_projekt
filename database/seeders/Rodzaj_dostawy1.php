<?php

namespace Database\Seeders;

use App\Models\Rodzaj_dostawy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Rodzaj_dostawy1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['dostawa' =>'Kurier'],
            ['dostawa' =>'Paczkomat']
        ];
        Rodzaj_dostawy::insert($data);
    }
}

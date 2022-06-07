<?php

namespace Database\Seeders;

use App\Models\Status_przesylki;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Status_przesylki1 extends Seeder
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
            ['status_realizacji' =>'W trakcie przygotowywania'],
            ['status_realizacji' =>'W drodze'],
            ['status_realizacji' =>'Dostarczona'],
        ];
        Status_przesylki::insert($data);
    }
}

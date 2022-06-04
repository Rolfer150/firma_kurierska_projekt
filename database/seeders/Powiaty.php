<?php

namespace Database\Seeders;

use App\Models\Powiat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Powiaty extends Seeder
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
            ['powiat' =>'krakowski'],
            ['powiat' =>'tarnowski'],
            ['powiat' =>'nowosądecki'],
            ['powiat' =>'bocheński'],
            ['powiat' =>'brzeski'],
            ['powiat' =>'chrzanowski'],
            ['powiat' =>'dąbrowski'],
            ['powiat' =>'gorlicki'],
            ['powiat' =>'limanowski'],
            ['powiat' =>'miechowski'],
            ['powiat' =>'myślenicki'],
            ['powiat' =>'nowotarski'],
            ['powiat' =>'olkuski'],
            ['powiat' =>'oświęcimski'],
            ['powiat' =>'proszowicki'],
            ['powiat' =>'suski'],
            ['powiat' =>'tatrzański'],
            ['powiat' =>'wadowicki'],
            ['powiat' =>'wielicki']
        ];
        Powiat::insert($data);
    }
}

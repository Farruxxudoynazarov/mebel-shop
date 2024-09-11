<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Value::create([
            "attribute_id" => 1,
            "name" => [
                "uz" => "Qizil",
                "ru" => "Красний"
            ]
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => [
                "uz" => "Qora",
                "ru" => "Черний"
            ]
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => [
                "uz" => "Jigarrang",
                "ru" => "Коричневий"
            ]
        ]);
        
        Value::create([
            "attribute_id" => 2,
            "name" => [
                "uz" => "MDF",
                "ru" => "MDF_RU"
            ]
        ]);
             
        Value::create([
            "attribute_id" => 2,
            "name" => [
                "uz" => "LDSP",
                "ru" => "LDSP_RU"
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shopping_list')->insert(
            [
                [
                    'item' => Str::random(10),
                    'price' => rand(1, 9999)
                ],
                [
                    'item' => 'Arroz',
                    'price' => '10'
                ],
                [
                    'item' => 'Gelatina',
                    'price' => '2'
                ]
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Action extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actions = [
            "Новинка",
            "Подарок",
            "Лучшее",
            "Распродажа",
            "Акция",
        ];

        foreach ($actions as $value) {
            DB::table('prod_action')->insert([
                'title' => $value
            ]);
        }


    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class Menu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $menu = [
            "Главная",
            "Каталог",
            "Услуги",
            "Цены",
            "Блог",
            "О нас",
            "Контакты"
        ];

        foreach ($menu as $value) {
            DB::table('nvg_menu')->insert([
                'name' => $value,
                'slug' => Str::slug($value)
            ]);
        }

    }
}

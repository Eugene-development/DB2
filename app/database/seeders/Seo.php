<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Seo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = [
            1 => [
                'title' => 'Главная',
                'description' => 'Главная страница сайта компании',
                'menu_id' => '1'
            ],
            2 => [
                'title' => 'Каталог',
                'description' => 'Каталог нашей компании',
                'menu_id' => '2',
            ],
            3 => [
                'title' => 'Блог',
                'description' => 'Блог нашей компании',
                'menu_id' => '3',
            ],
            4 => [
                'title' => 'Информация',
                'description' => 'Информация о наших услугах',
                'menu_id' => '4',
            ],
            5 => [
                'title' => 'О нас',
                'description' => 'Информация о нашей компании',
                'menu_id' => '5',
            ],
            6 => [
                'title' => 'Контакты',
                'description' => 'Главная страница сайта компании',
                'menu_id' => '6',
            ],
        ];

        foreach ($menu as $value) {
            DB::table('seo')->insert([
                'title' => $value['title'],
                'description' => $value['description'],
                'menu_id' => $value['menu_id'],
            ]);
        }
    }
}

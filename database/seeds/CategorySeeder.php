<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'name_category' => 'Спорт',
                'slug_category' => 'sport'
            ],
            [
                'name_category' => 'Политика',
                'slug_category' => 'politics'
            ],
            [
                'name_category' => 'Авто',
                'slug_category' => 'Auto'
            ],
            [
                'name_category' => 'Информационные технологии',
                'slug_category' => 'IT'
            ],
        ];

        DB::table('categories')->insert($category);
    }
}

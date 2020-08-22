<?php

use Illuminate\Database\Seeder;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData()//: array
    {
        $data = [];

        $faker = Faker\Factory::create('ru_RU');

        for ($i = 0; $i < 5; $i++) {
            $data[] = [
                'title' => $faker->realText(rand(10, 30)),
                'id_category'=>$faker->numberBetween(1,5),
                'text' => $faker->realText(rand(1000, 3000)),
                'isPrivate' => false
            ];
        }
        return $data;
    }
}

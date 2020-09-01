<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert($this->getData());
    }

    private function getData()//: array
    {
        $data = [];

        $faker = Faker\Factory::create('en_US');

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'name' => $faker->name,
                'email'=>$faker->email,
                'password' => Hash::make(123),
                'is_admin' => false,
            ];
        }
        return $data;
    }
}

<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'admin',
            'email' => 'admin@admin.ru',
            'password' => Hash::make('123'),
            'is_admin' => true

        ];

        DB::table('users')->insert($data);
    }
}

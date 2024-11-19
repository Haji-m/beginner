<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '福場凛太郎',
            'email' => '1234567@gmail.com',
            'password' => 'password1',
        ];
        DB::table('users')->insert($param);
    }
}

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

        $param = [
            'name' => '大西鬼右衛門',
            'email' => '2345678@gmail.com',
            'password' => 'password2',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '小西散右衛門',
            'email' => '3456789@gmail.com',
            'password' => 'password3',
        ];
        DB::table('users')->insert($param);
    }
}

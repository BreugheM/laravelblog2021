<?php

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
        //
        DB::table('users')->insert(['role_id'=>1,
            'is_active'=>1,
            'name'=>'Tom',
            'email'=>'vanhoutte.tom@gmail.com',
            'photo_id'=>1,
            'password'=>bcrypt(12345678)]);
        factory('App\User',50)->create();
    }
}

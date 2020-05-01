<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(['name'=>'CAT A']);
        DB::table('categories')->insert(['name'=>'CAT B']);
        DB::table('categories')->insert(['name'=>'CAT C']);
    }
}

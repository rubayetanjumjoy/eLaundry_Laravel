<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
             
            'name'=>'jamil',
            'email'=> 'jamil@gmail.com',
            'password'=>Hash::make('12345')
        ]);

    }
}

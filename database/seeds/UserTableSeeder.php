<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       
        DB::table('users')->delete();
        User::create([
            'name' => 'Tony',
            'email'    => 'ksph5219@gmail.com',
            'password' => Hash::make('password'),
        ]);
        
    }
}

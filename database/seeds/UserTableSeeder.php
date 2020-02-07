<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'id'            => '1',
        	'name'          => 'User',
        	'email'         => 'user@gmail.com',
        	'password'      => '$2y$10$fqdNPDZ9AjGHrdvVhJpZ2OE6mSklmngVI2vot0Cs.rnKlNJkfd30y', //admin123
        	'remember_token'=> '1',
        	'created_at'	=> Carbon::now(),
        	'updated_at'	=> Carbon::now(),
        ]);
    }
}

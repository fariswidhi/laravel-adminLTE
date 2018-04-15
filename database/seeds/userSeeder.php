<?php

use Illuminate\Database\Seeder;

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
       		'username'=>'admin',
       		'password'=>bcrypt('admin'),
       		'nama'=>'administrator',
       		'alamat'=>'rembang',
       		'telp'=>'08212345', 
       		'status'=>0
       	]);
    }
}

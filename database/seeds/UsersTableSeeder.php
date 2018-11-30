<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // resut the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        // generate 3 users/author
        DB::table('users')->insert([
        	[
        		'name' 	=> "Name 1",
        		'email' => "name1@email.com",
        		'password' => bcrypt('password1')
        	],
        	[
        		'name' 	=> "Name 2",
        		'email' => "name2@email.com",
        		'password' => bcrypt('password2')
        	],
        	[
        		'name' 	=> "Name 3",
        		'email' => "name3@email.com",
        		'password' => bcrypt('password3')
        	],
        ]);
    }
}

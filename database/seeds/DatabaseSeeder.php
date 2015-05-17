<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
    public function run()
    {
        $this->call('UserTableSeeder');

        $this->command->info('User table seeded!');
    }

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        //DB::table('users')->delete();

        \App\User::create([
            'user' => 'heie1553',
            'password' => bcrypt('1234567'),
            'email'=>'heie1553@scs.ubbcluj.ro',
            'firstname'=>'dora',
            'lastname'=>'husaru',
            'accounttype'=>'Student'
        ]);
    }

}
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
/*
        \App\User::create([
            'user' => 'heie1553',
            'password' => bcrypt('1234567'),
            'email'=>'heie1553@scs.ubbcluj.ro',
            'firstname'=>'dora',
            'lastname'=>'husaru',
            'accounttype'=>'Student'
        ]);

        \App\Discipline::create([
            'name'=>'algebra',
            'description'=>'matematica/algebra'
        ]);

        \App\Specializations::create([
            'name'=>'Matematica',
            'description'=>'Sectia de matematica a universitatii'
        ]);

        \App\Curriculum::create([
            'semester'=>3
        ]);

        \App\Student::create([
            'stud_id'=>12,
            'group1'=>922,
            'spec1_id'=>1,
            'spec1_year'=>2,
            'curriculum1_id'=>1,

        ]);

        \App\Grade::create([
            'stud_id'=>12,
            'disc_id'=>1,
            'grade'=>9
        ]);

        \App\Student::create([
            'stud_id'=>14,
            'group1'=>223,
            'spec1_id'=>1,
            'spec1_year'=>2,
            'curriculum1_id'=>1,

        ]);

        \App\Discipline::create([
            'name'=>'grafe',
            'description'=>'algoritmica grafelor'
        ]);

        \App\Grade::create([
            'stud_id'=>12,
            'disc_id'=>2,
            'grade'=>6
        ]);
*/
        \App\Specializations::create([
            'name'=>'Informatica',
            'description'=>'Sectia de informatica a universitatii'
        ]);

        \App\SpecDisciplines::create([
            'spec_id'=>2,
            'disc_id'=>1,
            'semester'=>4,
            'mandatory'=>1,
            'credits'=>5
        ]);


    }

}
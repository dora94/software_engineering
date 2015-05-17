<?php namespace App\Services;

use App\AdminStaff;
use App\Student;
use App\Teacher;
use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{if($data['type']=='Teacher')
		return Validator::make($data, [
			'user' => 'required|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
            'email'=>'required|max:50|unique:users',
            'firstname'=>'required|max:20',
            'lastname'=>'required|max:20',
            'Department1'=>'required',
            'Degree'=>'required',
            'Chief'=>'required'
		]);
        //to add if spec2 also want to be added
        if($data['type']=='Student')
        {
            return Validator::make($data, [
                'user' => 'required|max:255|unique:users',
                'password' => 'required|confirmed|min:6',
                'email'=>'required|max:50|unique:users',
                'firstname'=>'required|max:20',
                'lastname'=>'required|max:20',
                'Specializare1'=>'required',
                'Year1'=>'required',
                'Group1'=>'required',
                'Curriculum1'=>'required'
            ]);
        }
     return Validator::make($data, [
         'user' => 'required|max:255|unique:users',
         'password' => 'required|confirmed|min:6',
         'email'=>'required|max:50|unique:users',
         'firstname'=>'required|max:20',
         'lastname'=>'required|max:20',
         'Department2'=>'required'
     ]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		$u=User::create([
			'user' => $data['user'],
			'password' => bcrypt($data['password']),
            'email'=>$data['email'],
            'firstname'=>$data['firstname'],
            'lastname'=>$data['lastname'],
            'accounttype'=>$data['type']
		]);

        $x=$data['type'];
        if($x=='Staff')
            AdminStaff::create([
                'staff_id'=>$u->id,
                'dept_id'=>$data['Department2']
                ]);
        if($x=='Teacher')
            Teacher::create(['teacher_id'=>$u->id,
            'dept_id'=>$data['Department1'],
            'degree'=>$data['degree'],
            'dept_chief'=>$data['Chief']]);
        if($x=='Student')
            Student::create(['student_id'=>$u->id,
                'spec1_id'=>$data['Specializare1'],
                'spec2_id'=>$data['Specializare2'],
                'spec1_year'=>$data['Year1'],
                'spec2_year'=>$data['Year2'],
                'group1'=>$data['Group1'],
                'group2'=>$data['Group2'],
                'curriculum1_id'=>$data['Curriculum1'],
                'curriculum2_id'=>$data['Curriculum2']
            ]);
        return $u;
	}

}

<?php namespace App\Http\Controllers;

use App\Discipline;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SpecDisciplines;
use Request;

class TeacherController extends Controller
{

    public function addoptional()
    {
        $data = Request::all();

        $d=Discipline::create(['name'=>$data['dname'],
                            'description'=>$data['description']]);

        SpecDisciplines::create(['spec_id'=>$data['spec'],'disc_id'=>$d->id,'teacher_id'=>\Auth::id(),
                                'credits'=>$data['credit'],'semester'=>$data['semester'],'mandatory'=>1]);
        return redirect('/teacher/addoptional');
    }

}

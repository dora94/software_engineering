<?php namespace App\Http\Controllers;

use App\Discipline;
use App\Grade;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SpecDisciplines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller {

	//

    public function index()
    {
        return view('pages.index')->with(['user' => \Auth::user()]);
    }
    public function student()
    {
        return view('pages.student')->with(['user'=>\Auth::user()]);
    }
    public function home()
    {
        return view('pages.home');
    }
    public function teacher()
    {
        return view('pages.teacher');
    }

    public function adminstaff()
    {
        return view('pages.adminstaff');
    }
    public function grades()
    {
        //note pentru specializarea 1
        $grades = DB::table('grades')
            ->join('disciplines', 'grades.disc_id', '=', 'disciplines.id')
            ->join('specializeddisciplines', 'disciplines.id', '=', 'specializeddisciplines.disc_id')
            ->join('students', 'students.spec1_id', '=', 'specializeddisciplines.spec_id')
            ->select('disciplines.id', 'disciplines.name', 'grades.grade', 'grades.stud_id', 'specializeddisciplines.semester')
            ->where('grades.stud_id', '=', \Auth::id())
            ->distinct()
            ->get();

        //note pentru specializarea 2
        $grades2=DB::table('grades')
            ->join('disciplines', 'grades.disc_id', '=', 'disciplines.id')
            ->join('specializeddisciplines', 'disciplines.id', '=', 'specializeddisciplines.disc_id')
            ->join('students', 'students.spec2_id', '=', 'specializeddisciplines.spec_id')
            ->select('disciplines.id', 'disciplines.name', 'grades.grade', 'grades.stud_id', 'specializeddisciplines.semester')
            ->where('grades.stud_id', '=', \Auth::id())
            ->distinct()
            ->get();
        return view('pages.grades')->with(['grades'=>$grades,'grades2'=>$grades2]);

        //return view('pages.grades', ['grade'=>$grade,'disc'=>$disc,'name'=>$name]);
    }

    public function addoptional()
    {
        return view('pages.addoptional');
    }

    public function staffstudents()
    {
        return view('pages.staff.staffstudents');
    }
}

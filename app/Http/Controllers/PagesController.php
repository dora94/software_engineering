<?php namespace App\Http\Controllers;

use App\Discipline;
use App\Grade;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SpecDisciplines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller {

	public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        switch(\Auth::user()['accounttype']){
            case 'Student':
                return $this->grades();
            break;
            case 'Teacher':
                return $this->teacherCourses();
            break;
            case 'Staff':
                return $this->staffstudents();
            break;
        }
    }
    public function student()
    {if(\Auth::user()['accounttype']=='Student')
        return view('pages.student')->with(['user'=>\Auth::user()]);
    return view('/home');
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
    {if(\Auth::user()['accounttype']=='Student') {

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
        $grades2 = DB::table('grades')
            ->join('disciplines', 'grades.disc_id', '=', 'disciplines.id')
            ->join('specializeddisciplines', 'disciplines.id', '=', 'specializeddisciplines.disc_id')
            ->join('students', 'students.spec2_id', '=', 'specializeddisciplines.spec_id')
            ->select('disciplines.id', 'disciplines.name', 'grades.grade', 'grades.stud_id', 'specializeddisciplines.semester')
            ->where('grades.stud_id', '=', \Auth::id())
            ->distinct()
            ->get();
        return view('pages.grades')->with(['grades' => $grades, 'grades2' => $grades2]);
        }
        return view('\home');
    }

    public function addoptional()
    {if(\Auth::user()['accounttype']=='Teacher')
        return view('pages.teacher.addoptional');
     return view('\home');
    }

    public function staffstudents()
    {
    if(\Auth::user()['accounttype']=='Staff')
        return view('pages.staff.staffstudents');
    return view('\home');
    }

    public function teacherCourses()
    {
     if(\Auth::user()['accounttype']=='Teacher')
        $courses=DB::table('specializeddisciplines')
        ->join('disciplines','specializeddisciplines.disc_id','=','disciplines.id')
        ->join('specializations','specializeddisciplines.spec_id','=','specializations.id')
        ->select('specializeddisciplines.disc_id','specializeddisciplines.spec_id','specializeddisciplines.semester',
        'specializeddisciplines.mandatory','disciplines.name','specializations.name as specname')
        ->where('specializeddisciplines.teacher_id', '=', \Auth::id())
        ->get();
        return view('pages.teacher.courses')->with('courses',$courses);
     return view('\home');
    }

    public function teacherStudents()
    {if(\Auth::user()['accounttype']=='Teacher')
        return view('pages.teacher.students');
    return view('\home');
    }

    public function addDiscipline()
    {
        if(\Auth::user()['accounttype']=='Staff')
            return view('pages.staff.adddiscipline');
        return view('\home');
    }
}

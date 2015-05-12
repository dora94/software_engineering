<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

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
        return view('pages.grades');
    }
}

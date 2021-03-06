<?php

namespace App\Http\Controllers;

use App\Courses;
use Facade\FlareClient\Report;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    //
    public function create()
    {
        $Schedules = Courses::all()->unique('title');
        $year = Courses::all()->unique('semester_and_year');
        return view('reports.create', ['Schedules' => $Schedules, 'year' => $year ]);
    }

    public function show(Request $request)
    {
        $value = $request->input('title');
        $courses = Courses::all()->where('title', '=', $value);
        return view('reports.show', ['courses' => $courses]);
    }

    public function store(Request $request)
    {
        // Semester_and_year, Code, Title, enrollment
        $course = new Courses();
        //$course->CRSRID = $request->get('CRSRID');
        $course->semester_and_year = $request->get('semester_and_year');
        $course->code = $request->get('code');
        $course->title = $request->get('title');
        $course->enrollment = $request->get('enrollment');
        $course->save();
        return redirect('/reports/index')->with('success', 'Course has been added??');
    }
    public function displayStock()
    {
        $reports = Courses::sortable()->paginate(20);
        return view('reports.index',compact('reports'),['reports' => $reports]);
    }
}

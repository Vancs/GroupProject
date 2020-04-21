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
        return view('reports');
    }

    public function store(Request $request)
    {
        $course = new Courses();
        $course->CRSRID = $request->get('CRSRID');
        $course->semester_and_year = $request->get('semester_and_year');
        $course->save();
        return redirect('/reports/index')->with('success', 'Course has been added??');
    }
    public function displayStock()
    {
        $reports = Courses::sortable()->paginate(5);
        return view('reports.reports_index',compact('reports'),['reports' => $reports]);
    }
}

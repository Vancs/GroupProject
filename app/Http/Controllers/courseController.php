<?php

namespace App\Http\Controllers;

use App\Courses;
use Illuminate\Http\Request;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Schedules = Courses::all();
        return view('schedule', ['Schedules' => $Schedules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make('scheduleCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Courses();
        $course->semester_and_year = $request->input('semester_and_year');
        $course->CRSRID = $request->input('CRSRID');
        $course->Code = $request->input('Code');
        $course->Title = $request->input('Title');
        $course->credit = $request->input('credit');
        $course->start_date = $request->input('start_date');
        $course->end_date = $request->input('end_date');
        $course->class_days = $request->input('class_days');
        $course->class_time = $request->input('class_time');
        $course->final_day = $request->input('final_day');
        $course->final_time = $request->input('final_time');
        $course->enrollment = $request->input('enrollment');
        $course->instructor_id = $request->input('instructor_id');
        $course->location_id = $request->input('location_id');
        $course->Comments = $request->input('Comments');
        $course->save();
        return redirect("/schedule");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schedules = Courses::find($id);
        return view('scheduleShow', ['Schedules' => $schedules]);    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedules = Courses::find($id);
        return \View::make('scheduleUpdate')->with('schedules',$schedules);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $semester_and_year = request('semester_and_year');
        $CRSRID = request('CRSRID');
        $Code = request('Code');
        $Title = request('Title');
        $credit = request('credit');
        $start_date = request('start_date');
        $end_date = request('end_date');
        $class_days = request('class_days');
        $class_time = request('class_time');
        $final_day = request('final_day');
        $final_time = request('final_time');
        $enrollment = request('enrollment');
        $instructor_id = request('instructor_id');
        $location_id = request('location_id');
        $Comments = request('Comments');
        print("semester_and_year = $semester_and_year, CRSRID = $CRSRID , Code = $Code , Title = $Title ,
        credit = $credit, start_date = $start_date, end_date = $end_date, class_days = $class_days,
        class_time = $class_time, final_day = $final_day, final_time = $final_time, enrollment = $enrollment,
        instructor_id = $instructor_id , location_id = $location_id , Comments = $Comments");
        exit(1);
        $course = \App\Courses::find($id);
        $course->semester_and_year = $semester_and_year;
        $course->CRSRID = $CRSRID;
        $course->Code = $Code;
        $course->Title = $Title;
        $course->credit = $credit;
        $course->start_date = $start_date;
        $course->end_date = $end_date;
        $course->class_days = $class_days;
        $course->class_time = $class_time;
        $course->final_day = $final_day;
        $course->final_time = $final_time;
        $course->enrollment = $enrollment;
        $course->instructor_id = $instructor_id;
        $course->location_id = $location_id;
        $course->Comments = $Comments;
        $course->save();
        return redirect("/schedule");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Courses::find($id);
        $course->delete();
        return redirect("/schedule");
    }
}

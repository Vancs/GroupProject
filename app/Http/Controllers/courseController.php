<?php

namespace App\Http\Controllers;

use App\Courses;
use Illuminate\Http\Request;
use App\Instructor;
use App\Location;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors['instructors'] = Instructor::all()->toArray();
        $locations= Location::all();
        $Schedules = Courses::all();
        return view('schedule', ['Schedules' => $Schedules,
                                  'locations' => $locations  ], $instructors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $instructors['instructors'] = Instructor::all()->toArray();
      $locations= Location::all();
      $Schedules = Courses::all();
      return view('scheduleCreate', ['Schedules' => $Schedules,
                                'locations' => $locations  ], $instructors);
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
        $instructors['instructors'] = Instructor::all()->toArray();
        $locations= Location::all();
        return view('scheduleUpdate',['schedules' => $schedules,
                                  'locations' => $locations  ], $instructors);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $course = Courses::find($request->input('id'));

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

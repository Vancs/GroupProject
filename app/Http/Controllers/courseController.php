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
        print('Welcome to the Course List');
        $data = \DB::select("select CRSRID, Code,Title,Location,SETime,Instructor, Comments from schedules");
        return \View::make('schedules')->with('schedules',$data);
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
        print("inside Store");
        $course = new Courses();
        request()->validate([
            'CRSRID' => ['required', 'integer'],
            'Code' => ['required', 'integer'],
            'Title' => ['required', 'min:3'],
            'Location' => ['required', 'min:3'],
            'SETime' => ['required', 'min:3'],
            'Instructor' => ['required', 'min:3'],
            'Comments' => ['required', 'min:3'],
        ]);
        $course->CRSRID = request('CRSRID');
        $course->Code = request('Code');
        $course->Title = request('Title');
        $course->Location = request('Location');
        $course->SETime = request('SETime');
        $course->Instructor = request('Instructor');
        $course->Comments = request('Comments');
        $course->save();
        //print (" Saved ... we are done");
        //exit(1);
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
        print("inside the show method");
        $schedules = Courses::find($id);
        return \View::make('scheduleShow')->with('schedules',$schedules);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        print("inside the show Edit");
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
        print ("inside Update");
        $CRSRID = request('CRSRID');
        $Code = request('Code');
        $Title = request('Title');
        $Location = request('Location');
        $SETime = request('SETime');
        $Instructor = request('Instructor');
        $Comments = request('Comments');
        print("CRSRID = $CRSRID , Code = $Code , Title = $Title , Location = $Location , SETime = $SETime , Instructor = $Instructor , Comments = $Comments");
        exit(1);
        $course = \App\Courses::find($id);
        $course->CRSRID = $CRSRID;
        $course->Code = $Code;
        $course->Title = $Title;
        $course->Location = $Location;
        $course->SETime = $SETime;
        $course->Instructor = $Instructor;
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

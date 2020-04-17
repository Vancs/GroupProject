<?php

namespace App\Http\Controllers;

use App\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all instructors from the database and return to view
        $instructors = Instructor::all();
        return view('instructors.index',['instructors'=>$instructors]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Return view to create instructor
        return view('instructors.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Persist the instructor in the database
        //form data is available in the request object
        $instructor = new Instructor();
        //input method is used to get the value of input with its
        //name specified
        $instructor->name = $request->input('name');
        $instructor->save(); //persist the data
        return redirect()->route('instructors.index')->with('info','Instructor Added Successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find the instructor
        $instructor = Instructor::find($id);
        return view('instructor.edit',['instructor'=> $instructor]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //Retrieve the instructor and update
        $instructor = Instructor::find($request->input('id'));
        $instructor->name = $request->input('name');
        $instructor->save(); //persist the data
        return redirect()->route('instructors.index')->with('info','Instructor Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Retrieve the instructor
        $instructor = Instructor::find($id);
        //delete
        $instructor->delete();
        return redirect()->route('instructors.index');
    }

}

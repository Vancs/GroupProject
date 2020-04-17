<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Location;
class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all employees from the database and return to view
        $locations = Location::all();
        return view('location.index',['locations'=>$locations]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Return view to create employee
        return view('locations.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Persist the employee in the database
        //form data is available in the request object
        $location = new Location();
        //input method is used to get the value of input with its
        //name specified
        $location->campus = $request->input('campus');
        $location->building = $request->input('building');
        $location->room = $request->input('room');
        $location->save(); //persist the data
        return redirect()->route('locations.index')->with('info','Location Added Successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find the employee
        $location = Location::find($id);
        return view('location.edit',['location'=> $location]);
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
        //Retrieve the employee and update
        $location = Location::find($request->input('id'));
        $location->campus = $request->input('campus');
        $location->building = $request->input('building');
        $location->room = $request->input('room');
        $location->save(); //persist the data
        return redirect()->route('locations.index')->with('info','Location Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Retrieve the employee
        $location = Location::find($id);
        //delete
        $location->delete();
        return redirect()->route('locations.index');
    }
}
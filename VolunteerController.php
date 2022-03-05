<?php

namespace App\Http\Controllers;

use App\Models\volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('volunteer_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$res=new volunteer;
		$res->name=$request->input('name');
		$res->fathername=$request->input('fathername');
		$res->email=$request->input('email');
		$res->village=$request->input('village');
		
		$res->save();
		//$request->session()->flash('msg','You are added successfully');
		if($request->session()->has('name'))
		{
		$request->session()->flash('msg','You are added successfully');
		return redirect('volunteer_show');
		}
		else{
			$request->session()->flash('msg','You are added successfully');
		return redirect('volunteer_create');}
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function show(volunteer $volunteer)
    {
        //
		return view('Volunteer_show')->with('volunteerArr',volunteer::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(volunteer $volunteer, $id)
    {
        //
		return view('Volunteer_edit')->with('volunteerArr',volunteer::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, volunteer $volunteer ,$id)
    {
        //
		print_r($request->input());
		
				$res= volunteer::find($request->id);
		$res->name=$request->input('name');
		$res->fathername=$request->input('fathername');
		$res->email=$request->input('email');
		$res->village=$request->input('village');
		
		$res->save();
		$request->session()->flash('msg','Data Updated');
		return redirect('volunteer_show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(volunteer $volunteer,$id)
    {
        //
		volunteer::destroy(array('id',$id));
		return redirect ('volunteer_show');
    }
}

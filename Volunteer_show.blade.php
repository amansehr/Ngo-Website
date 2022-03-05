@extends('layout')
@section('title','Login')
@section('Header')
<x-pheader/>
@endsection
@section('container')
<div id="wrapper">
        <div class="clear">
        </div>
        
        <div class="clear">
        </div>
		<div><h2> Here is the list of Volunteers<h2></div>
		<a href="volunteer_create">Add volunteer</a>
		<table  id="customers"">
		 <span style="color: green;"> {{session('msg')}}</span> 
		<br>
		<br>
<!--<a href="volunteer_create"> Add Volunteer</a>-->
	<tr>
		<td>id</td>
		<td>Name</td>
		<td>Father Name</td>
		<td>Email</td>
		<td>Created At</td>
		<td>Action</td>
	</tr>
	@foreach($volunteerArr as $volunteer)
	<tr>
		<td>{{$volunteer->id}}</td>
		<td>{{$volunteer->name}}</td>
		<td>{{$volunteer->fathername}}</td>
		<td>{{$volunteer->email}}</td>
		<td>{{$volunteer->village}}</td>
		<td><a href="volunteer_delete/{{$volunteer->id}}">Remove</a>
		<!--<a href="volunteer_edit/{{$volunteer->id}}">Update</a>-->
		</td>
		
	</tr>
	
	@endforeach

</table

        <x-footer/>
@endsection

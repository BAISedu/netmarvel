@extends('layouts.master')
@section('title', 'Welcome to Cross Country!')
@section('content')
<div class="content">
    <div class="title"><h1>Cross Country - Add Event</h1></div>
    @include('layouts/cross-country-nav');
    <div class="container">
        <div class="form-group">
            <label for="Eventname">Event Name</label>
            <input type="email" class="form-control" id="Eventname" placeholder="Hong Gil dong">
        </div>
        <div class="form-group">
            <label for="dob">Date</label>
            <input type="date" class="form-control" id="dob" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label for="grade">Category</label>
            <select class="form-control">
                <option>3KM</option>
                <option>5KM</option>
            </select>
        </div>
        <div class="form-group">
            <label for="grade">State</label>
            <select class="form-control">
                <option>Active</option>
                <option>Completed</option>
                <option>Disables</option>
            </select>
        </div>
         <a href="/cross-country/add-event/"><button type="button" class="btn btn-primary btn-md">Save</button></a>
       

    </div>
    </div>
</div>

@endsection

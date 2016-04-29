@extends('layouts.master')
@section('title', 'Welcome to Cross Country!')
@section('content')
<div class="content">
    <div class="title"><h1>Cross Country - Add Event</h1></div>
    @include('layouts/cross-country-nav')
    <div class="container">
        {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('event-name', 'Event Name:') !!}
            {!! Form::text('event-name', 'IISSAC Badminton...', array('class'=>'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('dob', 'Date of Birth') !!}
            {!! Form::date('dob', null, array('class'=>'form-control')) !!}
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
       
        {!! Form::close() !!}
    </div>
</div>

@endsection

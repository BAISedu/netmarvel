@extends('layouts.master')
@section('title', 'Badminton - Create Participant')
@section('content')
<div class="content">
    <div class="title"><h1>Badminton &raquo; Create Participant</h1></div>
    @include('layouts/badminton-nav')
    <div class="container">
        <h1>Create Participant</h1>
        {!! Form::open(array('id' => 'create-participant')) !!}
            {!! Form::select('schools', array(null => '-- select --', 'bais' => 'BAIS', 'mcs' => 'MCS', 'sis' => 'SIS', 'wis' => 'WIS', 'bis' => 'BIS', 'bali' => 'BALI'), null, array('class' => 'form-control')) !!}
            <div class="form-group">
                <label for="firstName">Name</label>
                <div class="form-inline row">
                    <div class="col-xs-6">
                        {!! Form::label('firstName', 'First Name', array('class' => 'sr-only')) !!}
                        {!! Form::text('firstName', null, array('class' => 'form-control', 'placeholder' => 'First Name')) !!}
                    </div>
                    <div class="col-xs-6">
                        {!! Form::label('lastName', 'Last Name', array('class' => 'sr-only')) !!}
                        {!! Form::text('lastName', null, array('class' => 'form-control', 'placeholder' => 'Last Name')) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('grade', 'Grade') !!}
                {!! Form::select('grade', array(9, 10, 11, 12), null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('dob', 'Date of Birth') !!}
                {!! Form::date('dob', null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email Address') !!}
                {!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'example@example.com')) !!}
            </div>
            <div class="form-group">
                {!! Form::radio('gender', 'male') !!} Male
                {!! Form::radio('gender', 'female') !!} Female
            </div>
            <div>
                {!! Form::submit('Submit', array('class'=>'btn btn-default')) !!}
            </div>
    {!! Form::close() !!}
    </div>
</div>
@endsection

@extends('layouts.master')
@section('title', 'Swim - Program Manaagement - Add!')
@section('content')
<div class="content">
    <div class="title"><h1>Swim</h1></div>
    <h2>Program Management &raquo; Add</h2>
    <div class="container-fluid">
        <div class="row">
            {!! Form::open() !!}
              <fieldset class="form-group">
                {!! Form::label('program-name', 'Event Name') !!}
                {!! Form::text('program-name', null, array('placeholder' => 'enter Event Name', 'class', 'form-control')) !!}
              </fieldset>
              <fieldset class="form-group">
                {!! Form::label('venue', 'Venue') !!}
                {!! Form::text('venue', null, array('placeholder' => 'Location of the event', 'class', 'form-control')) !!}
              </fieldset>
              <fieldset class="form-group">
                {!! Form::label('start-date', 'Start Date') !!}
                {!! Form::date('start-date', null, array('class' => 'form-control')) !!}
              </fieldset>
              <fieldset class="form-group">
                {!! Form::label('end-date', 'End Date') !!}
                {!! Form::date('end-date', null, array('class' => 'form-control')) !!}
              </fieldset>
                <button class="btn btn-default"><span class="glyphicon glyphicon-floppy-save"></span>&nbsp; Save</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

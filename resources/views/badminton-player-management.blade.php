@extends('layouts.master')
@section('title', 'Badminton | Player Management')
@section('content')
<div class="content">
    <div class="title"><h1>Badminton &raquo; Player Management</h1></div>
    @include('layouts/badminton-nav')
    <div class="container">
        <h1>Player Management</h1>
        {!! Form::open(array('id' => 'player-management', 'class' => 'school-year')) !!}
        {!! Form::select('schools', array(null => '-- select --', 'bais' => 'BAIS', 'mcs' => 'MCS', 'sis' => 'SIS', 'wis' => 'WIS', 'bis' => 'BIS', 'bali' => 'BALI'), null, array('class' => 'form-control', 'id'=>'schools')) !!}
        {!! Form::submit('submit', array('class' => 'hidden', 'id' => 'select-school')) !!}
        {!! Form::close() !!}
        {!! Form::open(array('id'=>'add-participant')) !!}
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Grade</th>
                    <th>Last Participated Year</th>
                    <th>Gender</th>
                    <th>Event</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{!! Form::checkbox('user-id', 1 ) !!}</th>
                    <td>Jiho Yoo</td>
                    <td>12</td>
                    <td>2014</td>
                    <td>Male</td>
                    <td>Badminton</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">{!! Form::checkbox('user-id', 2 ) !!}</th>
                    <td>Matthew Shin</td>
                    <td>12</td>
                    <td>2014</td>
                    <td>Male</td>
                    <td>Badminton</td>
                </tr>
            </tbody>
        </table>
        <div>
        {!! Form::submit('Add Participant', array('class' => 'btn btn-default btn-lg active')) !!}
        <button type="button" class="btn btn-default btn-lg active"><a href="/badminton/create-participant/">Create Participant</a></button>
        </div>
    {!! Form::close() !!}
    </div>
    </div>
<script type="text/javascript">
jQuery(function ($) {
    $('select#schools').change(function() {
        $('form#player-management').submit();
        console.log('test');
    });
});
</script>
@endsection

@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
@include('layouts.soccer-nav')
<h3 class="text-center"><strong>Current Game</strong></h3>
<div class="row">
    <div class="col-md-6 panel panel-default">
        <div class="row">
            <div class="col-xs-2">School Logo 1</div>
            <div class="col-xs-8 text-center"><strong>Boys</strong></div>
            <div class="col-xs-2 text-right">School Logo 2</div>
        </div>
        <div class="row">
            <div class="col-xs-5 text-right">School 1</div>
            <div class="col-xs-2">vs.</div>
            <div class="col-xs-5 text-left">School 2</div>
        </div>
        </br>
        <div class="row">
            <div class="col-xs-6 text-right">Score 1</div>
            <div class="col-xs-6 text-left">Score 2</div>
        </div>
    </div>
    <div class="col-md-6 panel panel-default">
        <div class="row">
            <div class="col-xs-2">School Logo 1</div>
            <div class="col-xs-8 text-center"><strong>Girls</strong></div>
            <div class="col-xs-2 text-right">School Logo 2</div>
        </div>
        <div class="row">
            <div class="col-xs-5 text-right">School 1</div>
            <div class="col-xs-2">vs.</div>
            <div class="col-xs-5 text-left">School 2</div>
        </div>
        </br>
        <div class="row">
            <div class="col-xs-6 text-right">Score 1</div>
            <div class="col-xs-6 text-left">Score 2</div>
        </div>

   </div>
</div>
<h3 class="text-center"><strong>Today's IISSAC Schedule</strong></h3>
<div class="bs-example" daa-example-id="striped-table">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center"><strong>Field A</strong></th>
                <th class="text-center"><strong>Field B </strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">
                    <p>2:30 Boys 1-2</p>
                    <p>3:15 Boys 3-4</p>
                    <p>4:00 Boys 5-6</p>
                </td>
                <td class="text-center">
                    <p>2:30 Girls 1-2</p>
                    <p>3:15 Girls 3-4</p>
                    <p>4:00 Girls 5-6</p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

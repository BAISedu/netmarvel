@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
    <div class="content">
        <div class="title">Basketball {{ $year }}</div>
        @include('layouts.bb-nav')
    </div>
    <div class="row">
        <div class="col-sm-8"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1">
            <button type="button" class="btn btn-info">New Event</button>
        </div> 
        <div class="col-sm-1">
            <button type="button" class="btn btn-info">Edit Event</button>
        </div>
    </div>
@endsection

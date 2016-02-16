@extends('layouts.master')
@section('title', 'Badminton - Create Participant')
@section('content')
<div class="content">
    <div class="title"><h1>Badminton &raquo; Create Participant</h1></div>
    @include('layouts/badminton-nav');
    <div class="container">
        <h1>Create Participant</h1>
        <form class="form-inline">
            <div class="form-group">
                <label class="sr-only" for="exampleInputEmail3" placeholder="First">
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputPassword3" placeholder="Last">
            </div>
        </form>
        <form class="school-year">
            <select class="school-year">
                <option>2013</option>
                <option>2014</option>
                <option>2015</option>
                <option>2016</option>
            </select>
        </form>
    </div>
</div>
@endsection

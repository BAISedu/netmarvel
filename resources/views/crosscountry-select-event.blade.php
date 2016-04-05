@extends('layouts.master')
@section('title', 'Welcome to Cross Country!')
@section('content')
<div class="content">
    <div class="title"><h1>Cross Country - Add Event</h1></div>
    @include('layouts/cross-country-nav')
    <div class="container">
        <form class="" action="/cross-country/enter-data/" method="get">
            <div class="form-group">
                <label for="grade">Event Name</label>
                <select class="form-control">
                    <option> IISSAC 2015</option>
                    <option> IISSAC 2016</option>
                    <option> IISSAC 2017</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Continue</button>
        </form>
    </div>
</div>
@endsection

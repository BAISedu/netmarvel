@extends('layouts.master')
@section('title', 'Welcome to Cross Country!')
@section('content')
<div class="content">
    <div class="title"><h1>Cross Country</h1></div>
    @include('layouts/cross-country-nav');    
    <div class="container">
        <div class="row">
        <div class="col-md-4">
            <h2>Stats</h2>
            <p>See the Stats</p>
            <p>
                <a class="btn btn-default" href="/cross-country/stats/" role="button">View details </a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>Current Game</h2>
            <p>Score of current games going on</p>
            <p>
                <a class="btn btn-default" href="#" role="button">View details</a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>Player Management</h2>
            <p> Adding Players and Events</p>
            <p>
                <a class="btn btn-default" href="/cross-country/player-management/" role="button">Add Data</a>
            </p>
        </div>
    </div>

</div>
@endsection

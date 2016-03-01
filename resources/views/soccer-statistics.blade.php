@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
@include('layouts.soccer-nav')
<h3>$school1 - Girls/Boys Team ($schoo1 vs. $school2)</h3>
<form class="form-inline">
<table class="table table-bordered">
    <thead>
        <tr>
           <th>Player Name</th>
           <th>Player Number</th>
           <th>Fouls</th>
           <th>Goals</th>
           <th>Blocks</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>
                <input type="text" name="first-name" class="form-control" placeholder="first" disabled />
                <input type="text" name="last-name" class="form-control" placeholder="last" disabled/>
            </th>
            <th>
                <input type="text" name="last-name" class="form-control" placeholder="Player-Number" disabled/>
            </th>
            <th>
                <input type="text" name="last-name" class="form-control" placeholder="Fouls" />
            </th>
            <th>
                <input type="text" name="last-name" class="form-control" placeholder="Goals" />
            </th>
            <th>
                <input type="text" name="last-name" class="form-control" placeholder="Blocks" />
            </th>
        </tr>
    </tbody>
</table>
@endsection

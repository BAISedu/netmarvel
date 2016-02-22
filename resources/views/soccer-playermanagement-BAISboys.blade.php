@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
@include('layouts.soccer-nav')
<h3> BAIS - Boy's Team </h3>
<form class="form-inline">
<table class="table table-bordered">
    <thead>
        <tr>
            <th></th>
            <th class="text-center">Player Name</th>
            <th class="text-center">Player Number</th>
            <th class="text-center">Captain/Goalie</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row"><input type="checkbox"></th>
            <td>So Hyeon Park</td>
            <td>10</td>
            <td>
                <div class="form-group">
                    <label class="sr-only" for="playerType">Type</label>
                    <select class="form-control">
                        <option>N/A</option>
                        <option>Goalie</option>
                        <option>Captain</option>
                    </select>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<!-- CHANGE THE SOCCER/HOMEPAGE ROUTE -->
<div class="text-right">
    <a href="/soccer/playermanagement/BAISboys/AddPlayers/"><button type="button" class="btn btn-primary btn-md">Add a Player</button></a>
    <a href="/soccer/playermanagement/BAISboys/Save/"><button type="button" class="btn btn-primary btn-md">Submit</button></a>
</div>
</form>
@endsection

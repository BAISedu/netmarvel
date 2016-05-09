@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
@include('layouts.soccer-nav')
<h3>$school1 - Girls/Boys Team ($schoo1 vs. $school2)</h3>
{!! Form::open(array('id' => 'form form-horizontal')) !!}
<table class="table table-condensed table-responsive">
    <thead>
        <tr>
           <th>Player Name</th>
           <th class="col-xs-1">Player Number</th>
           <th>Goals</th>
           <th>Steals</th>
           <th>Assists</th>
           <th>Goalie Blocks</th>
           <th>Fouls</th>
           <th>Yellow Card</th>
           <th>Red Card</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <input type="text" name="first-name" class="form-control" placeholder="first" disabled/>
                <input type="text" name="last-name" class="form-control" placeholder="last" disabled/>
            </td>
            <td>
                <input type="number" name="player-number" class="form-control" placeholder="Player-Number" disabled/>
            </td>
            <td>
                <input type="number" name="last-name" class="form-control" placeholder="Goals" />
            </td>
            <td>
                <input type="number" name="last-name" class="form-control" placeholder="Steals" />
            </td>
            <td>
                <input type="number" name="last-name" class="form-control" placeholder="Assists" />
            </td>
            <td>
                <input type="number" name="last-name" class="form-control" placeholder="Goalie Blocks" />
            </td>
            <td>
                <input type="number" name="last-name" class="form-control" placeholder="Fouls" />
            </td>
            <td>
                <input type="number" name="last-name" class="form-control" placeholder="Yellow Card" />
            </td>
            <td>
                <input type="number" name="last-name" class="form-control" placeholder="Red Card" />
            </td>
        </tr>
    </tbody>
</table>
{!! Form::close() !!}
@endsection

@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
@include('layouts.soccer-nav')
<h3> BAIS - Boy's Team </h3>
{!! Form::open()!!}
<table class="table table-bordered">
    <thead>
        <tr>
            <th></th>
            <th class="text-center">First Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Date of Birth</th>
            <th class="text-center">Grade</th>
            <th class="text-center">Player Number</th>
            <th class="text-center">Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row"><input type="checkbox"></th>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
        </tr>
        <tr>
            <th scope="row"><input type="checkbox"></th>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
        </tr>
        <tr>
            <th scope="row"><input type="checkbox"></th>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
        </tr>
        <tr>
            <th scope="row"><input type="checkbox"></th>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
        </tr>
        <tr>
            <th scope="row"><input type="checkbox"></th>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
        </tr>
        <tr>
            <th scope="row"><input type="checkbox"></th>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
        </tr>
        <tr>
            <th scope="row"><input type="checkbox"></th>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
        </tr>
        <tr>
            <th scope="row"><input type="checkbox"></th>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
            <td><input type="text" class="form-control"  /></td>
        </tr>
    </tbody>
</table>
<div class="text-right">
    <a href="/soccer/playermanagement/BAISboys/"><button type="button" class="btn btn-primary btn-md">Add a Player</button></a>
</div>
{!!Form::close() !!}
@endsection

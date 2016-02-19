@extends('layouts.master')
@section('title', 'Welcome to Badminton!')
@section('content')
<div class="content">
    <div class="title"><h1>Badminton &raquo; Player Management</h1></div>
    @include('layouts/badminton-nav')
    <div class="container">
        <h1>Player Management</h1>
        <form class="school-year">
            <select id="school-year" class="form-control">
                <option>2013</option>
                <option>2014</option>
                <option>2015</option>
                <option>2016</option>
            </select>
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
                    <th scope="row"><input type="checkbox" /></th>
                    <td>Jiho Yoo</td>
                    <td>12</td>
                    <td>2014</td>
                    <td>Male</td>
                    <td>Badminton</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td>Matthew Shin</td>
                    <td>12</td>
                    <td>2014</td>
                    <td>Male</td>
                    <td>Badminton</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
    <button type="button" class="btn btn-default btn-lg active">Add Participant</button>
    </form>
    <button type="button" class="btn btn-default btn-lg active"><a href="/badminton/create-participant/">Create Participant</a></button>
    </div>
</div>
@endsection

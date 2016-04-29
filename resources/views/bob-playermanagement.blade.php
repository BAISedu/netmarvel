@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
    <div class="content">
        <div class="title"><h1>Battle of the Books - Player Management</h1></div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/bob/" style="color:white;">BoB Home</a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/bob/" style="color:red">LIVE NOW</a></li>
                        <li style="color:white;"><a href="/bob/bracket/" style="color:white;">Bracket</a></li>
                        <li style="color:white;"><a href="/bob/teams/" style="color:white;">Teams</a></li> 
                        <li style="color:white;"><a href="/bob/stats/" style="color:white;">Stats</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

<div class="content">
    <div class="container">
        <h1>Player Management</h1>
        {!! Form::open(array('class' => 'school-year')) !!}
        {!! Form::selectRange('school-year', 2012, 2015, null, array('class' => 'form-control')) !!}
        {!! Form::close() !!}
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
    <button type="button" class="btn btn-default btn-lg active"><a href="/bob/create-participant/">Create Participant</a></button>
    </div>
</div>


@endsection

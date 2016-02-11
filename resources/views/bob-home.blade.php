@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
    <div class="content">
        <div class="title"><h1>Battle of the Books</h1></div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="color:white;">BoB Home</a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                    
                        <li class="active"><a href="#" style="color:red">LIVE NOW</a></li>
                        <li style="color:white;"><a href="#" style="color:white;">Bracket</a></li>
                        <li style="color:white;"><a href="#" style="color:white;">Teams</a></li> 
                        <li style="color:white;"><a href="#" style="color:white;">Stats</a></li>
                    
                    </ul>
                </div>
            </div>
        </nav>
    </div>
<div class="row">
    <div class="col-sm-9">
        <h3>Upcoming Matches</h3>
    
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-5 text-left">Team 1</div>
                        <div class="col-xs-2 text-center">VS</div>
                        <div class="col-xs-5 text-right">Team 2</div>
                    </div>
                </li>
                <li class="list-group-item">
                     <div class="row">
                        <div class="col-xs-5 text-left">Team 3</div>
                        <div class="col-xs-2 text-center">VS</div>
                        <div class="col-xs-5 text-right">Team 4</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-5 text-left">Team 1</div>
                        <div class="col-xs-2 text-center">VS</div>
                        <div class="col-xs-5 text-right">Team 3</div>
                    </div>
                </li>
                </li>
                <li class="list-group-item"><p>Team 2 vs Team 4</p></li>
            </ul>
    
    
    </div>
    <div class="col-sm-3">
        <h3> Current Match </h3>
        <div class="col-sm-1">
            <p>
            Top 1
            </p>
        </div>
        
        <div class="col-sm-1">
            <p>
            VS
            </p>
        </div>

        <div class="col-sm-1">
            <p>
            Top 2
            </p>
        </div>
    
    </div>
</div>


@endsection

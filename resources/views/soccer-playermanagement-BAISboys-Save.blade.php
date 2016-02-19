@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
<nav class="navbar navbar-inverse navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
        </div>
        <ul class="nav navbar-nav nav-justified nav-tabs">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Player Management
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-header">BAIS
                        <ul class="">
                            <li><a href="#"></a>Boys</li>
                            <li><a href="#"></a>Girls</li>
                        </ul>
                    </li>
                    <li class="dropdown-header">BIS (Bali)
                        <ul class="">
                            <li><a href="#"></a>Boys</li>
                            <li><a href="#"></a>Girls</li>
                        </ul>
                    </li>
                    <li class="dropdown-header">BIS (Bandung)
                        <ul class="">
                            <li><a href="#"></a>Boys</li>
                            <li><a href="#"></a>Girls</li>
                        </ul>
                    </li>    
                    <li class="dropdown-header">MCS 
                        <ul class="">
                            <li><a href="#"></a>Boys</li>
                            <li><a href="#"></a>Girls</li>
                        </ul>
                    </li>
                    <li class="dropdown-header">SIS
                        <ul class="">
                            <li><a href="#"></a>Boys</li>
                            <li><a href="#"></a>Girls</li>
                        </ul>
                    </li>
                    <li class="dropdown-header">WIS
                        <ul class="">
                            <li><a href="#"></a>Boys</li>
                            <li><a href="#"></a>Girls</li>
                        </ul>
                    </li>    
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Schedule</a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Statistics</a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Previous IISSACs</a>
            </li>
        </ul>
    </div>
</nav>
<h3> BAIS - Boy's Team List</h3>
<form class="form-inline">
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="text-center">Player Name</th>
            <th class="text-center">Player Number</th>
            <th class="text-center">Captain/Goalie</th>
        </tr>
    </thead>
    <tbody>
        <tr>
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
<div class="text-right">
    <a href="/soccer/playermanagement/BAISboys/"><button type="button" class="btn btn-primary btn-md">Edit the List</button></>
</div>
</form>
@endsection

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
<h3> BAIS - Boy's Team </h3>
<form class="form-inline">
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
            <td><input type="text"</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
@endsection

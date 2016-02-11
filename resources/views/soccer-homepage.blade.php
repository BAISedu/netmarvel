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
<h3 class="text-center"><strong>Current Game</strong></h3>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-xs-1">1</div>
            <div class="col-xs-4 text-center">4</div>
            <div class="col-xs-1 text-right">1</div>
        </div>

    </div>
    <div class="col-md-6">.col-md-6</div>
</div>


@endsection

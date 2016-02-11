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
            <ul class="nav navbar-nav">
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
                        <li class="dropdown-header">MCS 
                            <ul class="">
                                <li><a href="#"></a>Boys</li>
                                <li><a href="#"></a>Girls</li>
                            </ul>
                        <li class="dropdown-header">SIS
                            <ul class="">
                                <li><a href="#"></a>Boys</li>
                                <li><a href="#"></a>Girls</li>
                            </ul>
                        <li class="dropdown-header">WIS
                            <ul class="">
                                <li><a href="#"></a>Boys</li>
                                <li><a href="#"></a>Girls</li>
                            </ul>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Schedule
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Statistics
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Previous IISSACs
                </li>
@endsection

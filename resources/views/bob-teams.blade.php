@extends('layouts.master')
@section('title', 'Battle of Books - Teams')
@section('content')
@include('layouts.bob-nav')
<div data-spy="affix" data-target="#myScrollspy" data-offset-top="20">
    <div class="container">
        <div class="row">
            <nav class="col-sm-3" id="myScrollspy">
                <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="405">
                    <li><a href="#section1">Team 1</a></li>
                    <li><a href="#section2">Team 2</a></li>
                    <li><a href="#section3">Team 3</a></li>
                    <li><a href="#section4">Team 4</a></li>

                </ul>

            </nav>
            <div class="col-sm-9">
                <div id="section1"> 
                    <h1>Team 1</h1>
                    <p>Try to scroll this page and look at the navigation list while scrolling!</p>
                    <p style="font-size:140%;">Player 1</p>
                    <p>Desc.</p>
                    <p style="font-size:140%;">Player 2</p>
                    <p>Desc.</p>
                    <p style="font-size:140%;">Player 3</p>
                    <p>Desc.</p>
                    <p style="font-size:140%;">Player 4</p>
                    <p>Desc.</p>
                    <p style="font-size:140%;">Player 5</p>
                    <p>Desc.</p>

                   ...
                </div>
                <div id="section2"> 
                    <h1>Team 2</h1>
                    <p>Try to scroll this page and look at the navigation list while scrolling!</p>
                    <p style="font-size:130%;">Player 1</p>
                    <p>Desc.</p>
                    <p style="font-size:130%;">Player 2</p>
                    <p>Desc.</p>
                    <p style="font-size:130%;">Player 3</p>
                    <p>Desc.</p>
                    <p style="font-size:130%;">Player 4</p>
                    <p>Desc.</p>
                    <p style="font-size:130%;">Player 5</p>
                    <p>Desc.</p>

                  ...
                </div>
                <div id="section3"> 
                    <h1>Team 3</h1>
                    <p>Try to scroll this page and look at the navigation list while scrolling!</p>
                    <p style="font-size:130%;">Player 1</p>
                    <p>Desc.</p>
                    <p style="font-size:130%;">Player 2</p>
                    <p>Desc.</p>
                    <p style="font-size:130%;">Player 3</p>
                    <p>Desc.</p>
                    <p style="font-size:130%;">Player 4</p>
                    <p>Desc.</p>
                    <p style="font-size:130%;">Player 5</p>
                    <p>Desc.</p>
                   ...
                </div>

                <div id="section4"> 
                    <h1>Team 4</h1>
                    <p>Try to scroll this page and look at the navigation list while scrolling!</p>
                    <p style="font-size:130%;">Player 1</p>
                    <p>Desc.</p>
                    <p style="font-size:130%;">Player 2</p>
                    <p>Desc.</p>
                    <p style="font-size:130%;">Player 3</p>
                    <p>Desc.</p>
                    <p style="font-size:130%;">Player 4</p>
                    <p>Desc.</p>
                    <p style="font-size:130%;">Player 5</p>
                    <p>Desc.</p>
                   ...
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

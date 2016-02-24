@extends('layouts.master')
@section('title', 'Battle of Books - Teams')
@section('content')
    <div class="content">
        <div class="title"><h1>Battle of the Books &raquo; Teams</h1></div>
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

<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

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
                    <div> 
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
                </div>
        <div id="section2"> 
            <h1>Team 2</h1>
                <p>Try to scroll this page and look at the navigation list while scrolling!</p>
                    <div> 
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

        <div id="section3"> 
            <h1>Team 3</h1>
                <p>Try to scroll this page and look at the navigation list while scrolling!</p>
                    <div> 
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

        <div id="section4"> 
            <h1>Team 4</h1>
                <p>Try to scroll this page and look at the navigation list while scrolling!</p>
                    <div> 
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

</body>


@endsection

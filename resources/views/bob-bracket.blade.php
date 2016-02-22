@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
    <div class="content">
        <div class="title"><h1>Battle of the Books</h1></div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/bob/" style="color:white;">BoB Home</a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/bob/" style="color:red">LIVE NOW</a></li>
                        <li style="color:white;"><a href="/bob/bracket" style="color:white;">Bracket</a></li>
                        <li style="color:white;"><a href="/bob/teams/" style="color:white;">Teams</a></li> 
                        <li style="color:white;"><a href="/bob/stats/" style="color:white;">Stats</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
    <div>
    <script type="text/javascript">

    var boys = {
        teams : [
            ["Team 1", "Team 2"], /* first Bi  */
            ["Team 3", "Team 4"], /* second matchup */
            ["Team 4", "Team 5"], /* third matchup */
            ["Team 6", "Team 7"]  /* fourth Bi */
        ],
        results : [
            [[1,0], [30,54], [50, 45], [1,0]],       /* first round */
            [[46,12], [35,56]],                      /* second round */
            [[52,50]] /* final round */
        ]
    }
    var girls = {
        teams : [
            ["Girls Team 1", "Team 2"], /* first Bi  */
            ["Team 3", "Team 4"], /* second matchup */
            ["Team 4", "Team 5"], /* third matchup */
            ["Team 6", "Team 7"]  /* fourth Bi */
        ],
        results : [
            [[1,0], [30,54], [50, 45], [1,0]],       /* first round */
            [[46,12], [35,56]],                      /* second round */
            [[52,50]] /* final round */
        ]
    }


    $(function() {
        $('#bracket1').bracket({
        init: boys/* data to initialize the bracket with */ })

        $('#bracket2').bracket({
        init: girls/* data to initialize the bracket with */ })
    })
    </script>
    </div>
@endsection

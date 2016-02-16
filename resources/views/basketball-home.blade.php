@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
    <div class="content">
        <div class="title">Basketball {{ $year }}</div>
        @include('layouts.bb-nav')
    </div>
    <div class="row"> <!-- button for editing and creating event -->
        <div class="col-sm-8"></div>
        <div class="col-sm-2">
            <button type="button" class="btn btn-info">New Event</button>
        </div> 
        <div class="col-sm-2">
            <button type="button" class="btn btn-info">Edit Event</button>
        </div>
    </div>
    <div id="bracket"><!-- bracket -->
        <div class="col-sm-12 text-center">
        <h2>Boys Bracket</h2>
        </div>
    </div>
    <div> <!-- upcoming games -->
        <div class="col-sm-6">
            <h3> Boy's Current Game </h3>
            <div class="row">   
                <div class="col-sm-5 text-center">School</div>
                <div class="col-sm-2 text-center">vs.</div>
                <div class="col-sm-5 text-center">School</div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center"><h4>Score</h4></div>
            </div>
        </div>
        <div class="col-sm-6">
            <h3> Girl's Current Game </h3>
            <div class="row">   
                            <div class="col-sm-5 text-center">School</div>
                            <div class="col-sm-2 text-center">vs.</div>
                            <div class="col-sm-5 text-center">School</div>
                        <div class="row">
                            <div class="col-sm-12 text-center"><h4>Score</h4></div>
                        </div>

            </div>

        </div>

    <script type="text/javascript">

    var minimalData = {
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

    $(function() {
        $('#bracket').bracket({
        init: minimalData /* data to initialize the bracket with */ })
    })
    </script>
    
    <script type="text/javascript">

    var minimalData = {
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

    $(function() {
        $('#bracket').bracket({
        init: minimalData /* data to initialize the bracket with */ })
    })
    </script>



@endsection

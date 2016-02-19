@extends('layouts.master')
@section('title', 'Welcome to Badminton!')
@section('content')
<div class="content">
    <div class="title"><h1>Badminton</h1></div>
    @include('layouts/badminton-nav')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">Boys Bracket</h2>
                <div id="bracket1"><!-- bracket --></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">Girls Bracket</h2>
                <div id="bracket2"><!-- bracket --></div>
            </div>
        </div>

    </div>
</div>
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

@endsection

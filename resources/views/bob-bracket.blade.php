@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
@include('layouts.bob-nav')
    
    <div class="row">
        <h2>Battle of the Books  Bracket</h2>
        <div id="bracket1"></div>
    </div>

    <script type="text/javascript">

    var boys = {
        teams : [
            ["Team 1", "Team 2"], /* first Bi  */
            ["Team 3", "Team 4"], /* second matchup */
            ["Team 5", "Team 6"], /* third matchup */
            ["Team 7", "Team 8"]  /* fourth Bi */
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

       })
    </script>
@endsection

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
    <div><!-- braxket -->
         

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

@endsection

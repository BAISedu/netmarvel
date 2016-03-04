@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
@include('layouts.bob-nav')

<div class="row">
    <div class="col-sm-9">
        <h3>Upcoming Matches</h3>
    
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-5 text-left">
                        BAIS
                        <img src="/img/bob/BAIS-LetterHead-Header.png"/>
                        </div>
                        <div class="col-xs-2 text-center">VS</div>
                        <div class="col-xs-5 text-right">Team 2</div>
                    </div>
                </li>
                <li class="list-group-item">
                     <div class="row">
                        <div class="col-xs-5 text-left">Team 3</div>
                        <div class="col-xs-2 text-center">VS</div>
                        <div class="col-xs-5 text-right">Team 4</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-5 text-left">Team 1</div>
                        <div class="col-xs-2 text-center">VS</div>
                        <div class="col-xs-5 text-right">Team 3</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-5 text-left">Team 2</div>
                        <div class="col-xs-2 text-center">VS</div>
                        <div class="col-xs-5 text-right">Team 4</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-5 text-left">Team 1</div>
                        <div class="col-xs-2 text-center">VS</div>
                        <div class="col-xs-5 text-right">Team 4</div>
                    </div>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-5 text-left">Team 2</div>
                        <div class="col-xs-2 text-center">VS</div>
                        <div class="col-xs-5 text-right">Team 3</div>
                    </div>
                </li>

                </li>

            </ul>
    
    
    </div>
    <div class="col-sm-3">
        <h3> Current Match </h3>
            
        <li class="list-group-item">
            <div class="row">
                <div class="col-xs-5 text-left">
                <h4>Team 1</h4>
                </div>
                <div class="col-xs-2 text-center">
                <h4> VS </h4>        
                </div>
                <div class="col-xs-5 text-right">
                <h4>Team 2</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 text-left">
                <p style="font-size:140%;color:blue;">0</p>
                </div>
                <div class="col-xs-4 text-center">
                <p style="font-size:130%;">00:00</p>        
                </div>
                <div class="col-xs-4 text-right">
                <p style="font-size:140%;color:red;">0</p>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <div class="row">
                <div class="col-xs-6 text-left">
                    <h5> Top 1 </h5>
                    <h6> Score </h6>
                    <h5> Mid 1 </h5>
                    <h6> Score </h6>
                    <h5> Bot 1 </h5>
                    <h6> Score </h6>
                </div>
                <div class="col-xs-6 text-right">
                    <h5> Top 2 </h5>
                    <h6> Score </h6>
                    <h5> Mid 2 </h5>
                    <h6> Score </h6>
                    <h5> Bot 2 </h5>
                    <h6> Score </h6>
                </div>
            </li>
        </div>
</div>


@endsection

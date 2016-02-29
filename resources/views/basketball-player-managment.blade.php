@extends('layouts.master')
@section('title', 'Basketball - Player Management')
@section('content')
<div class="content">
    <div class="title"><h1>Basketball &raquo; Create Participant</h1></div>
    @include('layouts/bb-nav')
    <div class="container">
        <h1>Create Participant</h1>
        <form id="create-participant">
            <select id="schools" class="form-control">
                <option>BAIS</option>
                <option>MCS</option>
                <option>SIS</option>
                <option>WIS</option>
                <option>BIS</option>
                <option>BALI</option>
            </select>
            <div class="form-group">
                <label for="firstName">Name</label>
                <div class="form-inline row">
                    <div class="col-xs-6">
                        <label for="firstName" class="sr-only">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="First Name">
                    </div>
                    <div class="col-xs-6">
                        <label for="lastName" class="sr-only">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="numberAdd">Number</label>
                <input type="number" class="form-control" id="numberAdd" placeholder="00">
            </div>
            <div class="form-group">
                <label for="positionAdd">Position</label>
                <input type="position" class="form-control" id="positionAdd" placeholder="PG">
            </div>
            <div class-"form-inline row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="grade">Grade</label>
                        <select class="form-control">
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="yearsPlayed">Years Played</label>
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
            </div>
            <div>    
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOption" id="inlineRadio1" value="option1">Male</label>

                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOption" id="inlineRadio2" value="option2">Female</label>
            </div>
            <div>
                <input class="btn btn-default" type="submit" value="Submit">
            </div>
        </form>
    </div>
</div>
@endsection

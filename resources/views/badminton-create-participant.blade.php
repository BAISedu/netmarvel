@extends('layouts.master')
@section('title', 'Badminton - Create Participant')
@section('content')
<div class="content">
    <div class="title"><h1>Badminton &raquo; Create Participant</h1></div>
    @include('layouts/badminton-nav');
    <div class="container">
        <h1>Create Participant</h1>
        <form class="form-inline">
            <div class="form-group">
                <label class="sr-only" for="exampleInputEmail3" placeholder="First">
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputPassword3" placeholder="Last">
            </div>
        </form>
             <form class="schools">
                <select class="schools">
                <option>BAIS</option>
                <option>MCS</option>
                <option>SIS</option>
                <option>WIS</option>
                <option>BIS</option>
                <option>BALI</option>
            </select>
        </form>
        <div>
            <form>
                <label for="firstName">Name</label>
                <div class="form-inline">
                    <div class="form-group">
                        <label for="firstName" class="sr-only">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="lastName" class="sr-only">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="grade">Grade</label>
                    <select class="form-control">
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <label for="emailAdd">Email address</label>
                    <input type="email" class="form-control" id="emailAdd" placeholder="example@example.com">
                </div>
                <div>
                    
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOption" id="inlineRadio1" value="option1">Male</label>

                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOption" id="inlineRadio2" value="option2">Female</label
                </div>
                <div>
                <form class="bs-example" data-example-id="btn-tags">
                <input class="btn btn-default" type="submit" value="Submit">
                </div>
            </div>
        </div>
@endsection

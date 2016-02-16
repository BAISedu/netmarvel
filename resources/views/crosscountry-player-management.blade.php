@extends('layouts.master')
@section('title', 'Welcome to Cross Country!')
@section('content')
<div class="content">
    <div class="title"><h1>Cross Country - Player Management</h1></div>
    @include('layouts/cross-country-nav');    
    <div class="container">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Schools
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">BAIS</a></li>
                <li><a href="#">MICS</a></li>
                <li><a href="#">BIS</a></li>
                <li><a href="#">BALI</a></li>
                <li><a href="#">WIS</a></li>
                <li><a href="#">SIS</a></li>
            </ul>
        </div>
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
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
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

            </form>
        </div>
    </div>
</div>
@endsection

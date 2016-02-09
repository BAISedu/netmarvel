@extends('layouts.master')
@section('title', 'Welcome to Badminton!')
@section('content')
<div class="content">
    <div class="title"><h1>Badminton</h1></div>
    <div class="container">
        <form class="form-signin">
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputSchool" class="sr-only">School Name</label>
            <input type="school" id="inputSchool" class="form-control" placeholder="School Name" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
</div>
</div>
@endsection

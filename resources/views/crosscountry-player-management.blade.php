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
    </div>
</div>
@endsection

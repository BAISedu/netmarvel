@extends('layouts.master')
@section('title', 'Welcome to Cross Country!')
@section('content')
<div class="content">
    <div class="title"><h1>Cross Country - Stats</h1></div>
    @include('layouts/cross-country-nav');    
    <div class="container">
        <table class="table table-striped"> 
            <thead> 
                <tr> 
                    <th>#</th> 
                    <th>Category</th>
                    <th>School</th>
                    <th>Gender</th>
                    <th>Name</th>
                    <th>Grade</th>
                    <th>Time</th> 
                </tr> 
            </thead> 
            <tbody> 
                <tr> 
                    <th scope="row">1</th> 
                        <td>5KM</td>
                        <td>BAIS</td>
                        <td>Male</td>
                        <td>Matthew</td> 
                        <td>12th</td>
                        <td>1:15</td>
                </tr> 
                <tr> 
                    <th scope="row">2</th> 
                        <td>5Km</td> 
                        <td>BAIS</td> 
                        <td>Female</td>
                        <td>David</td>
                        <td>12th</td>
                        <td>20:14</td>
                </tr>  
            </tbody> 
        </table>
    </div>
</div>
@endsection

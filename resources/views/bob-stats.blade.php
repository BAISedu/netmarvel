@extends('layouts.master')
@section('title', 'Battle of the Books - Stats!')
@section('content')
<div class="content">
    <div class="title"><h1>Battle of the Books</h1></div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/bob/" style="color:white;">BoB Home</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/bob/" style="color:red">LIVE NOW</a></li>
                    <li style="color:white;"><a href="/bob/bracket/" style="color:white;">Bracket</a></li>
                    <li style="color:white;"><a href="/bob/teams/" style="color:white;">Teams</a></li> 
                    <li style="color:white;"><a href="/bob/stats/" style="color:white;">Stats</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <table class="table table-striped">
      <thead>
      <tr>
        <th>Name</th>
        <th>Team</th>
        <th>Score</th>
        <th>Position</th>
        <th>Games Played</th>
      </tr>
      </thead>
      <tr>
          <td>Name 1</td>
          <td>Team 1</td>        
          <td>Score 1</td>
          <td>Position 1</td>
          <td>Games Played</td>
     </tr>
     <tr>
          <td>Name 2</td>
          <td>Team 2</td>      
          <td>Score 2</td>
          <td>Position 2</td>
          <td>Games Played</td>
     </tr>
     <tr>
          <td>Name 3</td>
          <td>Team 3</td>      
          <td>Score 3</td>
          <td>Position 3</td>
          <td>Games Played</td>
     </tr>
     <tr>
        <td>Name 4</td>
        <td>Team 4</td>
        <td>Score 4</td>
        <td>Position 4</td>
        <td>Games Played</td>
     </tr>
     <tr>
        <td>Name 5</td>
        <td>Team 5</td>
        <td>Score 5</td>
        <td>Position 5</td>
        <td>Games Played</td>
     </tr>
     <tr>
        <td>Name 6</td>
        <td>Team 6</td>
        <td>Score 6</td>
        <td>Position 6</td>
        <td>Games Played</td>
     </tr>
     <tr>
        <td>Name 7</td>
        <td>Team 7</td>
        <td>Score 7</td>
        <td>Position 7</td>
        <td>Games Played</td>
     </tr>

 </table>
</div>
@endsection

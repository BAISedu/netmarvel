@extends('layouts.master')
@section('title', 'Welcome to Swim!')
@section('content')
<div class="content">
    <div class="title"><h1>Swim</h1></div>
    <h2>Program Management</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="table-responsive">
            <table class="table table-striped">
            <thead>
            <tr>
            <th>PID</th>
            <th>Programme Name</th>
            <th>Venue</th>
            <th>Start Date</th>
            <th>End Date</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>PID#</td>
            <td>IISSAC Swim Meet Preliminary</td>
            <td><a href="#">Bandung Allience Intercultural School</a></td>
            <td>yy-mm-dd</td>
            <td>yy-mm-dd</td>
            </tr>
            <tr>
            <td>PID#</td>
            <td>IISSAC Swim Meet 2015</td>
            <td>Bandung Allience Intercultural School</td>
            <td>yy-mm-dd</td>
            <td>yy-mm-dd</td>
            </tr>
            <tr>
            <td>PID#</td>
            <td>Programme</td>
            <td>Bandung Allience Intercultural School</td>
            <td>yy-mm-dd</td>
            <td>yy-mm-dd</td>
            </tr>
            </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection

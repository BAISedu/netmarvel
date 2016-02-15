@extends('layouts.master')
@section('title', 'Welcome to Swim!')
@section('content')
<div class="content">
    <div class="title"><h1>Swim</h1></div>
    <h2>Program Management</h2>
    <div class="container-fluid">
            <button class="btn btn-default"><span class="glyphicon glyphicon-search"></span>&nbsp; Search</button>
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
            <td><a href="/swim/event-detail/">IISSAC Swim Meet Preliminary</a></td>
            <td>Bandung Allience Intercultural School</td>
            <td>yy-mm-dd</td>
            <td>yy-mm-dd</td>
            </tr>
            <tr>
            <td>PID#</td>
            <td><a href="/swim/event-detail/">IISSAC Swim Meet 2016</a></td>
            <td>Bandung Allience Intercultural School</td>
            <td>yy-mm-dd</td>
            <td>yy-mm-dd</td>
            </tr>
            </tbody>
            </table>
            </div>
        </div>
        <div class="row">
            <button class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp; Add Program</button>
            <button class="btn btn-default"><span class="glyphicon glyphicon-floppy-save"></span>&nbsp; Save</button>
            <button class="btn btn-default"><span class="glyphicon glyphicon-print"></span>&nbsp; Print</button>
        </div>
    </div>
</div>
@endsection

@extends('layouts.master')
@section('title', 'Welcome to Swim!')
@section('content')
<div class="content">
    <div class="title"><h1>Swim</h1></div>
    <h2>Event Details</h2>
    <div class="container-fluid">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Event 01</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <!-- table content goes in here -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Lane</th>
                                    <th>Heat</th>
                                    <th>Name</th>
                                    <th>Team</th>
                                    <th>Sub.Time</th>
                                    <th>Time(mm:ss:ms)</th>
                                    <th>Place</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th>Heat 1</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
</script>
@endsection

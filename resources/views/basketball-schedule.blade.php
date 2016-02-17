@extends('layouts.master')
@section('title', 'Schedule')
@section('content')
    <div class="content">
        @include('layouts.bb-nav')
    </div>

    <div> 
        <h1> Bandung Alliance Intercultural School</h1>
    </div>
    <div>
        <div class="col-sm-6">
            <div class="container">
                <h2>Bordered Table</h2>          
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Home</th>
                            <th>vs.</th>
                            <th>Away</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>14:30</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
        <div class="col-sm-6">
            <h4>Girl's Team</h4>
        </div>
    </div>
    </div>
@endsection 

@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
@include('layouts.soccer-nav')
<div class="row">
    <div class="col-xs-4">
        <h3 class="text-center">Friday</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Field A</th>
                    <th>Field B</th>
                </tr>       
                <td>
                    2:30 Boys 1-2</br>
                    3:15 Boys 3-4</br>
                    4:00 Boys 5-6
                </td>
                <td>
                    2:30 Girls 1-2</br>
                    3:15 Girls 3-4</br>
                    4:00 Girls 5-6
                </td>
            </thead>
          </table>
    </div>
    <div class="col-xs-4">
        <h3 class="text-center">Saturday</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Field A</th>
                    <th>Field B</th>
                </tr>       
                <td>
                    2:30 Boys 1-2</br>
                    3:15 Boys 3-4</br>
                    4:00 Boys 5-6
                </td>
                <td>
                    2:30 Girls 1-2</br>
                    3:15 Girls 3-4</br>
                    4:00 Girls 5-6
                </td>
            </thead>
        </table>
    </div>
    <div class="col-xs-4">
        <h3 class="text-center">Sunday</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Field A</th>
                    <th>Field B</th>
                </tr>       
                <td>
                    2:30 Boys 1-2</br>
                    3:15 Boys 3-4</br>
                    4:00 Boys 5-6
                </td>
                <td>
                    2:30 Girls 1-2</br>
                    3:15 Girls 3-4</br>
                    4:00 Girls 5-6
                </td>
            </thead>
        </table>
    </div>
</div>
@endsection

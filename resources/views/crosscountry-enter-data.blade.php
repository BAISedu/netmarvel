@extends('layouts.master')
@section('title', 'Welcome to Cross Country!')
@section('content')
<div class="content">
    <div class="title"><h1>Cross Country - Enter Data</h1></div>
    @include('layouts/cross-country-nav')
    <div class="container">
    <h3>IISSAC 2015</h3><!-- change the name depending on what they selected on the previous screen -->
        <form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Grade</th>
                    <th>School</th>
                    <th>Category</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mat</td>
                    <td>Shin</td>
                    <td>12</td>
                    <td>BAIS</td>
                    <td>5KM</td>
                    <td>  <div class="form-inline">
                             <div class="form-group">
                                <label for="Minute" class="sr-only">Time</label>
                                <input type="text" class="form-control" id="Minute" placeholder="Minute">
                             </div>
                             <div class="form-group">
                                <label for="Second" class="sr-only">Second</label>
                                <input type="text" class="form-control" id="Second" placeholder="Second">
                             </div>
                          </div>
                    </td>
                </tr>
            </tbody>
        </table>
            <label for="firstName">Name</label>
            <div class="form-inline">
                <div class="form-group">
                    <label for="firstName" class="sr-only">First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="First Name">
                </div>
                <div class="form-inline">
                <div class="form-group">
                    <label for="firstName" class="sr-only">First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="First Name">
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
                <label for="grade">School</label>
                <select class="form-control">
                    <option>BAIS</option>
                    <option>BALI</option>
                    <option>MICS</option>
                    <option>WIS</option>
                    <option>BIS</option>
                    <option>SIS</option>
                </select>
            </div>
            <div class="form-group">
                <label for="grade">Category</label>
                <select class="form-control">
                    <option>3KM Male</option>
                    <option>5KM Male</option>
                    <option>3KM Female</option>
                    <option>5KM Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="grade">Event Name</label>
                <select class="form-control">
                    <option> IISSAC 2015</option>
                    <option> IISSAC 2016</option>
                    <option> IISSAC 2017</option>
                </select>
            </div>
            <form>
                <label for="Minute">Time</label>
                <div class="form-inline">
                    <div class="form-group">
                        <label for="Minute" class="sr-only">Minute</label>
                        <input type="text" class="form-control" id="Minute" placeholder="Minute">
                    </div>
                    <div class="form-group">
                        <label for="Second" class="sr-only">Second</label>
                        <input type="text" class="form-control" id="Second" placeholder="Second">
                    </div>
                </div>
                <a href="/cross-country/add-event/"><button type="button" class="btn btn-primary btn-md">Save</button></a>
    </div>
    </div>
</div>
@endsection

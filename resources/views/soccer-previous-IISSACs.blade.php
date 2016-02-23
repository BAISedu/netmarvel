@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
@include('layouts.soccer-nav')
<p>
    Choose a year:<div class="form-group">
                    <label class="sr-only" for="year">Year</label>
                    <select class="form-control">
                        <option>2016</option>
                        <option>2017</option>
                        <option>Coming soon</option>
                    </select>
                </div>

</p>
@endsection

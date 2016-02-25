@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
@include('layouts.soccer-nav')
<h3 class="text-center"><strong>$year IISSAC</strong></h3>
<div class="row">
    <div class="col-md-6 panel panel-default">
        <div class="row">
            <h3><strong>Scores</strong></h3>
        </div>
    </div>
    <div class="col-md-6 panel panel-default">
        <div class="row">
            <h3><strong>MVP</strong></h3>
            <strong>BAIS</strong>
            <ul>
                <li>Boy</li>
                <li>Girl</li>
            </ul>
            <strong>BIS BALI</strong>
            <ul>
                <li>Boy</li>
                <li>Girl</li>
            </ul>
            <strong>BIS BANDUNG</strong>
            <ul>
                <li>Boy</li>
                <li>Girl</li>
            </ul>
            <strong>MCS</strong>
            <ul>
                <li>Boy</li>
                <li>Girl</li>
            </ul>
            <strong>SIS</strong>
            <ul>
                <li>Boy</li>
                <li>Girl</li>
            </ul>
            <strong>WS</strong>
            <ul>
                <li>Boy</li>
                <li>Girl</li>
            </ul>
        </div>
    </div>
</div>

@endsection

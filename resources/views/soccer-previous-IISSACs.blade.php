@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
@include('layouts.soccer-nav')
<h3 class="text-center"><strong>$year IISSAC</strong></h3>
<div class="row">
    <div class="col-md-6 panel panel-default">
        <h3><strong>Scores</strong></h3>
        <table class="table">
            <tr>
                <td colspan="5" class="text-center">
                    <strong>BOYS</strong>
                </td>
                <td colspan="5" class="text-center">
                    <strong>GIRLS</strong> 
                </td>
            </tr>
            <tr>
                <td colspan="10" class="text-center">
                    <strong>FRIDAY, OCTOBER $date</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2.5">
                    HOME  
                </td>
                <td colspan="2.5" class="text-right">
                    GUEST
                </td>
                </td>
                <td colspan="2.5">
                    HOME  
                </td>
                </td>
                <td colspan="2.5" class="text-right">
                    GUEST  
                </td>
                </td>
            </tr>
            <tr>
                <td colspan="1">
                    $school1boy
                </td>
                <td colspan="1">
                    $school1boyscore
                </td>
                <td colspan="1">
                    vs.
                </td>
                <td colspan="1">
                    $school2boyscore
                </td>
                <td colspan="1">
                    $school2boy
                </td>
                <td colspan="1">
                    $school1girl
                </td>
                <td colspan="1">
                    $school1girlscore
                </td>
                <td colspan="1">
                    vs.
                </td>
                <td colspan="1">
                    $school2girlscore
                </td>
                <td colspan="1">
                    $school2girl
                </td>
            </tr>
            <tr>
                <td colspan="10" class="text-center">
                    <strong>SATURDAY, OCTOBER $date</strong>
                </td>
            </tr><tr>
                <td colspan="10" class="text-center">
                    <strong>SUNDAY, OCTOBER $date</strong>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-6 panel panel-default">
        <h3><strong>MVP</strong></h3>
        <strong>BAIS</strong>
        <ul>
            <li>Boy:</li>
            <li>Girl:</li>
        </ul>
        <strong>BIS BALI</strong>
        <ul>
            <li>Boy:</li>
            <li>Girl:</li>
        </ul>
        <strong>BIS BANDUNG</strong>
        <ul>
            <li>Boy:</li>
            <li>Girl:</li>
        </ul>
        <strong>MCS</strong>
        <ul>
            <li>Boy:</li>
            <li>Girl:</li>
        </ul>
        <strong>SIS</strong>
        <ul>
            <li>Boy:</li>
            <li>Girl:</li>
        </ul>
        <strong>WS</strong>
        <ul>
            <li>Boy:</li>
            <li>Girl:</li>
        </ul>
    </div>
</div>

@endsection

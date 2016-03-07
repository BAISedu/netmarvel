@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
@include('layouts.soccer-nav')
<h3 class="text-center"><strong>$year IISSAC</strong></h3>
<div class="row">
    <div class="col-md-9 panel panel-default">
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
                <td>
                    AAAA
                </td>
                <td>
                    34
                </td>
                <td>
                    vs.
                </td>
                <td>
                    ##
                </td>
                <td>
                    AAAA
                </td>
                <td>
                    AAAA
                </td>
                <td>
                    ##
                </td>
                <td>
                    vs.
                </td>
                <td>
                    ##
                </td>
                <td>
                    AAAA
                </td>
            </tr>
            <tr>
                <td colspan="10" class="text-center">
                    <strong>SATURDAY, OCTOBER $date</strong>
                </td>
            </tr>
            <tr>
                <td colspan="10" class="text-center">
                    <strong>SUNDAY, OCTOBER $date</strong>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-3 panel panel-default">
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

@extends('layouts.master')
@section('title', 'Swim - Program Manaagement - Add!')
@section('content')
<div class="content">
    <div class="title"><h1>Swim</h1></div>
    <h2>Program Management &raquo; Add</h2>
    <div class="container-fluid">
        <div class="row">
            <form>
              <fieldset class="form-group">
                  <label for="program-name">Program Name</label>
                  <input type="text" class="form-control" id="program-name" placeholder="Enter program name">
              </fieldset>
              <fieldset class="form-group">
                  <label for="venue">Venue</label>
                  <input type="text" class="form-control" id="venue" placeholder="Enter Venue">
              </fieldset>
              <fieldset class="form-group">
                  <label for="end-date">Start Date</label>
                  <input type="date" class="form-control" id="end-datee" placeholder="MM/DD/YYYY">
              </fieldset>
              <fieldset class="form-group">
                  <label for="end-date">End Date</label>
                  <input type="date" class="form-control" id="end-date" placeholder="MM/DD/YYYY">
              </fieldset>
            </form>

        </div>
        <div class="row">
            <button class="btn btn-default"><span class="glyphicon glyphicon-floppy-save"></span>&nbsp; Save</button>
        </div>
    </div>
</div>
@endsection

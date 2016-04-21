@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
@include('layouts.soccer-nav')
{!! Form::open(array('url' => '/soccer/previousIISSACs/', 'id' => 'year-picker')) !!}
    {!! Form::label('year', 'Choose a year') !!}
    {!! Form::selectRange('year', 2016, 2017, null, array('class' => 'form-control')) !!}
    {!! Form::submit('Submit', array('class' => 'hidden')) !!}
{!! Form::close () !!}
<script type="text/javascript">
jQuery( document ).ready(function( $ ) {
   $( "select#year" ).change(function() {
     $( "form#year-picker" ).submit();
   });
});
</script>
@endsection

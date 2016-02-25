@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
@include('layouts.soccer-nav')
<p>
        <form name="" class="" method="post" id="year-picker" action="/soccer/previousIISSACs/">
    Choose a year:<div class="form-group">
                    <label class="sr-only" for="year">Year</label>
                    <select class="form-control" id="year">
                        <option> - select one - </option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>Coming soon</option>
                    </select>
                </div>
            <button type="submit" class="hidden"></button>
        </form>

</p>
<script type="text/javascript">
jQuery( document ).ready(function( $ ) {
   $( "select#year" ).change(function() {
     $( "form#year-picker" ).submit();
   });
});
</script>
@endsection

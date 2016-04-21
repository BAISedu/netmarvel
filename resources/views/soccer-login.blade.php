@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
        <div class="content">
            <h1 class="text-center">Welcome to <br/><strong>Soccer <br/>IISSAC</strong></h1>
                {!! Form::open(array('class' => 'login form-horizontal', 'role'=> 'form')) !!}
                    <div class="form-group">
                        {!! Form::label('username', 'User ID:', array ('class' => 'control-label col-sm-2')) !!}
                        <div class="col-sm-10">
                            {!! Form::text('username', 'Enter your user ID here.', array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('PASSWORD', 'PASSWORD:', array('class' => 'control-label col-sm-2')) !!}
                        <div class="col-sm-10">
                            {!! Form::text('PASSWORD', 'Enter your password here.', array ('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class = "col-sm-offset-2 col-sm-10">
                            <a href="/soccer/homepage/"><button type="button" class="btn btn-primary btn-md">Submit</button></a>
                        </div>
                    </div>    
                {!!Form::close() !!}
        </div>
@endsection

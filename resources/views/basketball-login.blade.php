@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
    <div class="content">
        @include('layouts.bb-nav')
    </div>
            <body>
                {!! Form::open(array('class' => 'login form-horizontal', 'role' => 'form')) !!}
                    {!! Form::label('username', 'User ID:', array('class' => "control-label col-sm-2")) !!}
                       {!! Form::text('username', '', array('class' => 'form-control') !!}
                          {!! Form::label ('password', array('class'=> 'control-label col-sm-2') !!}
                            {!! Form::password ('password','',  array('class'=> 'form-control') !!}
                            {!! Form::Submit('Submit', array('class'=> 'btn btn-primary btn-md') !!}
                {!! Form::close() !!}
            </body>
        </div>
@endsection

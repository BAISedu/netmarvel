@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
    <div class="content">
        @include('layouts.bb-nav')
    </div>
            <body>
                {!! Form::open(array('class' => 'login form-horizontal', 'role' => 'form', 'url' => '/soccer/homepage/')) !!}
                    <div class="form-group">
                        {!! Form::label('username', 'User ID', array('class' => "control-label col-sm-2")) !!}
                        <div class="col-sm-10">
                            {!! Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'Enter username here')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label ('password', 'Password', array('class'=> 'control-label col-sm-2')) !!}
                        <div class="col-sm-10">
                            {!! Form::password ('password', array('class'=> 'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class = "col-sm-offset-2 col-sm-10">
                            {!! Form::Submit('Submit', array('class'=> 'btn btn-primary btn-md')) !!}
                        </div>
                    </div>    
                </form>
                {!! Form::close() !!}
            </body>
        </div>
@endsection

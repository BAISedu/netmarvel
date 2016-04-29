@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
    <div class="content">
        @include('layouts.bb-nav')
    </div>
            <body>
                {!! Form::open(array('class' => 'login form-horizontal', 'role' => 'form')) !!}
                <form class="login form-horizontal" role="form">
                    <div class="form-group">
                        {!! Form::label('username', 'User ID:', array('class' => "control-label col-sm-2")) !!}
                        <div class="col-sm-10">
                            {!! Form::text('username', '', array('class' => 'form-control') !!}
                            <input type="text" class="form-control" id="username" placeholder="Enter your user ID here." />
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label ('password', array('class'=> 'control-label col-sm-2') !!}
                        <label class="control-label col-sm-2" for="PASSWORD">PASSWORD:</label>
                        <div class="col-sm-10">
                            {!! Form::password ('password','',  array('class'=> 'form-control') !!}
                            <input type="password" class="form-control" id="PASSWORD" placeholder="Enter your password here." />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class = "col-sm-offset-2 col-sm-10">
                            {!! Form::Submit('Submit', array('class'=> 'btn btn-primary btn-md') !!}
                            <a href="/soccer/homepage/"><button type="button" class="btn btn-primary btn-md">Submit</button></a>
                        </div>
                    </div>    
                </form>
                {!! Form::close() !!}
            </body>
        </div>
@endsection

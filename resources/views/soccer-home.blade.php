@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
        <div class="content">
            <h1 class="text-center">Welcome to <br/><strong>Soccer <br/>IISSAC</strong></h1>
            <body>
                <p class = "text-center">
                    <a href="/soccer/login/"><button type ="button" class="btn btn-primary btn-lg">Staff</button></a>
                    &nbsp; or &nbsp; <button type="button" class = "btn btn-success btn-lg">Guest</button>
                </p> 
            </body>
        </div>
@endsection

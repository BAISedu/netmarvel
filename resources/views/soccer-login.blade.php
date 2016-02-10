@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
        <div class="content">
            <h1 class="text-center">Welcome to <br/><strong>Soccer <br/>IISSAC</strong></h1>
            <body>
                <form class="login form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="username">User ID:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" placeholder="Enter your user ID here." />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="PASSWORD">PASSWORD:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="PASSWORD" placeholder="Enter your password here." />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class = "col-sm-offset-2 col-sm-10">
                            <a href="/soccer/homepage/"><button type="button" class="btn btn-primary btn-md">Submit</button></a>
                        </div>
                    </div>    
                </form>
            </body>
        </div>
@endsection

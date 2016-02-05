@extends('layouts.master')
@section('title', 'Welcome!')
@section('content')
        <div class="content">
            <h1 class="text-center">Welcome to <br/><strong>Soccer <br/>IISSAC</strong></h1>
            <body>
                <form class="login" role ="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ID">ID:</label>
                        <div class="col-sm-l0">
                            <input type="ID" class="form-control" id="ID" placeholder="Enter your ID here.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for"PASSWORD">PASSWORD:</label>
                        <div class="col-sm-10">
                            <input type="PASSWORD" class="form-control" id="PASSWORD" placeholder="Enter your password here.">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class = "col-sm-offset-2 col-sm-10">
                            <button type="button" class="btn btn-primary btn-md">Submit</button>

                        </div>
                    </div>    
                </form>
            </body>
        </div>
@endsection

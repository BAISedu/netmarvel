<!doctype html>
<html>
    <head>
        <title>IISSAC - @yield('title')</title>
        {!! Html::style('css/app.css') !!}

        {!! Html::script('js/jquery.min.js') !!}
        {!! Html::script('js/scripts.js') !!}
        {!! Html::script('js/bootstrap.min.js') !!}

    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#myPage">IISSAC</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="/badminton/">Badminton</a></li>
                    <li><a href="/basketball/">Basketball</a></li>
                    <li><a href="/bob/">BoB</a></li>
                    <li><a href="/cross-country/">Cross Country</a></li>
                    <li><a href="/soccer/">Soccer</a></li>
                    <li><a href="/swim/">Swim</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="jumbotron">
                <h1>IISSAC</h1>
                <p>One application to rule them all</p>
            </div>
            <div class="container">
                @yield('content')
            </div>
        </div>
    </body>
</html>

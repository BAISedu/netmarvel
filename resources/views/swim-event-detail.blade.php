@extends('layouts.master')
@section('title', 'Welcome to Swim!')
@section('content')
<div class="content">
    <div class="title"><h1>Swimming Programs</h1></div>
    <h2>Detail</h2>
    <div class="container-fluid">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Event 01</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse out">
                    <div class="panel-body">
                        <!-- table content goes in here -->
                        {!! Form::open() !!}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Lane</th>
                                    <th>Heat</th>
                                    <th>Name</th>
                                    <th>Team</th>
                                    <th>Sub.Time</th>
                                    <th>Time(mm:ss:ms)</th>
                                    <th>Place</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="10" style = "background-color: #555; color: #ffffff; text-align: center">HEAT 1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>Amudhan W. Ramappa</td>
                                    <td>Internatoinal School in India</td>
                                    <td>NT</td>
                                    <td>{!! Form::time('12345', '12:30 AM', array('disabled')) !!}</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>Amudhan W. Ramappa</td>
                                    <td>Internatoinal School in India</td>
                                    <td>NT</td>
                                    <td>{!! Form::time('12346', null) !!}</td>
                                    <td>2</td>
                                </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>Amudhan W. Ramappa</td>
                                    <td>Internatoinal School in India</td>
                                    <td>NT</td>
                                    <td>{!! Form::time('12347', null) !!}</td>
                                    <td>3</td>
                                </tr>
                           </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="container-fluid">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Event 02
                    </a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse out">
                    <div class="panel-body">
                        <!-- table content goes in here -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Lane</th>
                                    <th>Heat</th>
                                    <th>Name</th>
                                    <th>Team</th>
                                    <th>Sub.Time</th>
                                    <th>Time(mm:ss:ms)</th>
                                    <th>Place</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="10" style = "background-color: #555; color: #ffffff; text-align: center">HEAT 1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>Amudhan W. Ramappa</td>
                                    <td>Internatoinal School in India</td>
                                    <td>NT</td>
                                    <td>Minute:Second:Millisecond</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>Amudhan W. Ramappa</td>
                                    <td>Internatoinal School in India</td>
                                    <td>NT</td>
                                    <td>Minute:Second:Millisecond</td>
                                    <td>2</td>
                                </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>Amudhan W. Ramappa</td>
                                    <td>Internatoinal School in India</td>
                                    <td>NT</td>
                                    <td>Minute:Second:Millisecond</td>
                                    <td>3</td>
                                </tr>
                           </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>    
      </div>     
    </div>
    <div class="row">
        <button class="btn btn-default"><a href="/swim/add-event/"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Add Event</a></button>
    </div>

</div>
<script type="text/javascript">

</script>
@endsection

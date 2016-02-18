@extends('layouts.master')
@section('title', 'Schedule')
@section('content')
    <div class="content">
        @include('layouts.bb-nav')
    </div>

    <div> 
        <h1> Bandung Alliance Intercultural School</h1>
    </div>
    <div>
        <div>
            <!--Boy's-->
            <div class="container">
                <h2>Boys</h2>          
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Home</th>
                            <th>vs.</th>
                            <th>Away</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>15:30</td>
                            <td>BALI</td>
                            <td>vs</td>
                            <td>BAIS</td>
                        </tr>
                        <tr>
                            <td>17:30</td>
                            <td>BIS</td>
                            <td>vs</td>
                            <td>BAIS</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center"><strong> Saturday</strong></td>
                        </tr>
                        <tr>
                            <td>10:00</td>
                            <td>BAIS</td>
                            <td>vs</td>
                            <td>SIS</td>
                        </tr>
                        <tr>
                            <td>13:00</td>
                            <td>WS</td>
                            <td>vs</td>
                            <td>BAIS</td>
                        </tr>
                        <tr>
                            <td>15:00</td>
                            <td>BAIS</td>
                            <td>vs</td>
                            <td>MCS</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center"><strong> Sunday</strong></td>
                        </tr>
                        <tr>
                            <td>8:00</td>
                            <td>Seed 3</td>
                            <td>G1</td>
                            <td>Seed 6</td>
                        </tr>
                        <tr>
                            <td>8:00</td>
                            <td>Seed 4</td>
                            <td>G2</td>
                            <td>Seed 5</td>
                        </tr>
                        <tr>
                            <td>9:00</td>
                            <td>Seed 1</td>
                            <td>vs</td>
                            <td>G1 Winner</td>
                        </tr>
                        <tr>
                            <td>9:00</td>
                            <td>Seed 2</td>
                            <td>vs</td>
                            <td>G2 Winner</td>
                        </tr>
                        <tr>
                            <td>12:00</td>
                            <td colspan="3" class="text-center"><strong>Final</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>

    <div>
        <div>
            <!--Girl's-->
            <div class="container">
                <h2>Girls</h2>          
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Home</th>
                            <th>vs.</th>
                            <th>Away</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>14:30</td>
                            <td>BALI</td>
                            <td>vs</td>
                            <td>BAIS</td>
                        </tr>
                        <tr>
                            <td>18:30</td>
                            <td>MCS</td>
                            <td>vs</td>
                            <td>BAIS</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center"><strong> Saturday</strong></td>
                        </tr>
                        <tr>
                            <td>9:00</td>
                            <td>SIS</td>
                            <td>vs</td>
                            <td>BAIS</td>
                        </tr>
                        <tr>
                            <td>12:00</td>
                            <td>BAIS</td>
                            <td>vs</td>
                            <td>BIS</td>
                        </tr>
                        <tr>
                            <td>14:00</td>
                            <td>BAIS</td>
                            <td>vs</td>
                            <td>WS</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center"><strong> Sunday</strong></td>
                        </tr>
                        <tr>
                            <td>8:00</td>
                            <td>Seed 3</td>
                            <td>G1</td>
                            <td>Seed 6</td>
                        </tr>
                        <tr>
                            <td>8:00</td>
                            <td>Seed 4</td>
                            <td>G2</td>
                            <td>Seed 5</td>
                        </tr>
                        <tr>
                            <td>9:00</td>
                            <td>Seed 1</td>
                            <td>vs</td>
                            <td>G1 Winner</td>
                        </tr>
                        <tr>
                            <td>9:00</td>
                            <td>Seed 2</td>
                            <td>vs</td>
                            <td>G2 Winner</td>
                        </tr>
                        <tr>
                            <td>11:00</td>
                            <td colspan="3" class="text-center"><strong>Final</td>
                        </tr>
                    </tbody>
                </table>
    </div>
    </div>
@endsection 

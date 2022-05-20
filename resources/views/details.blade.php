@extends('inc.header')
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Country Details of {{$name}}</h1><hr/>
                    
<!-- Country Details -->
                    <table class="table table-responsive table-hover" >
                        <thead>
                        <th>Country Name</th>
                            <th>Region</th>
                            <th>Code</th>
                            <th>No. of Border</th>
                            
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $con_detail->commonName}}</td>
                                <td>{{ $con_detail->region}}</td>
                                <td>{{ $con_detail->countryCode}}</td>
                                <td>{{ $borderC}}</td>
                            </tr>
                        </tbody>

                    </table>
                    <h1>4 holidays for the current year of {{$name}}</h1><hr/>
                    <!-- Holidays -->
                    <table class="table table-responsive table-hover" >
                        <thead>
                        <th>1st holiday</th>
                            <th>2nd holiday</th>
                            <th>3rd holiday</th>
                            <th>4th holiday</th>
                            <th>Total Holidays</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $holidays[0]->name}} / {{ $holidays[0]->date}}</td>
                                <td>{{ $holidays[1]->name}} / {{ $holidays[1]->date}}</td>
                                <td>{{ $holidays[2]->name}} / {{ $holidays[2]->date}}</td>
                                <td>{{ $holidays[3]->name}} / {{ $holidays[3]->date}}</td>
                                <td>{{$totalHolidays}}</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        @extends('inc.footer')       
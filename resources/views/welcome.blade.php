@extends('inc.header')
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>main</h1>
                   
                   
                    <table class="table table-responsive table-hover" > 
                        <thead>
                            <tr>
                                <th>Sr#</th>
                                <th>Country Code</th>
                                <th>Country Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        @foreach ($conData as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $data->countryCode }}</td>
                                <td><a href="{{route('get.detail',[$data->countryCode,$data->name])}}">{{ $data->name }}</a></td>
                            </tr>
                            
                        @endforeach

                        </tbody>  
                    </table>
                  
                </div>
            </div>
        </div>
   
        @extends('inc.footer')
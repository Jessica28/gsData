
@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>
                Google sheet data
                </h2>
               <table class ="table table-bordered">
                <tread>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
                </tread>
                @foreach ($data as $item)
                <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->adress}}</td>
                <td>{{$item->phone}}</td>
                </tr>
                    
                @endforeach
                

               </table>


            </div>
        </div>
    
    
    </div>






@stop


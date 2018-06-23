@if(Auth::user()->jabatan == 'admin')
@extends('layouts.app1')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">View Rute</div>
<div class="panel-body">
<a href="/costomer">back</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$costomer->name}}</td>
                            <td>{{$costomer->address}}</td>
                            <td>{{$costomer->phone}}</td>
                            <td>{{$costomer->gender}}</td>  
                        </tr>
                    </tbody>
                </table>
            </div>
</div>
    </div>
</div>
@endsection

@else

<a href='/home'>Back</a>

@endif
@if(Auth::user()->jabatan == 'admin')
@extends('layouts.app1')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">View Rute</div>
<div class="panel-body">
<a href="/rute">back</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Depart At</th>
                            <th>Rute From</th>
                            <th>Rute to</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$rute->depart_at}}</td>
                            <td>{{$rute->rute_form}}</td>
                            <td>{{$rute->rute_to}}</td>
                            <td>{{$rute->price}}</td>  
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
@if(Auth::user()->jabatan == 'admin')
@extends('layouts.app1')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">View Rute</div>
<div class="panel-body">
<a href="/trans">back</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Depart At</th>
                            <th>Rute From</th>
                            <th>Rute to</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$trans->code}}</td>
                            <td>{{$trans->description}}</td>
                            <td>{{$trans->seat_qty}}</td>
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
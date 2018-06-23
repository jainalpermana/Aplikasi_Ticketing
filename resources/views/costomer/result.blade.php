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

@if (count($hasil))
<p>Hasil pencarian : <b>{{$cosquery}}</b></p>
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
                    @foreach($hasil as $c)
                        <tr>
                            <td>{{$c->name}}</td>
                            <td>{{$c->address}}</td>
                            <td>{{$c->phone}}</td>
                            <td>{{$c->gender}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


                @else

                Oops.. Data <b>{{$cosquery}}</b> Tidak Tersedi Coba Inputkan Lagi

                @endif


            </div>
</div>
    </div>
</div>
@endsection

@else

<a href='/home'>Back</a>

@endif
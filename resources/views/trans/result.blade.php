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

@if (count($hasil))
<p>Hasil pencarian : <b>{{$transquery}}</b></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Seat Qty</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($hasil as $t)
                        <tr>
                            <td>{{$t->code}}</td>
                            <td>{{$t->description}}</td>
                            <td>{{$t->seat_qty}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


                @else

                Oops.. Data <b>{{$transquery}}</b> Tidak Tersedi Coba Inputkan Lagi

                @endif


            </div>
</div>
    </div>
</div>
@endsection

@else

<a href='/home'>Back</a>

@endif
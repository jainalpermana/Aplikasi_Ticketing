@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">View Rute</div>
<div class="panel-body">
<a href="/reservation">back</a>

@if (count($hasil))
<p>Hasil pencarian : <b>{{$reserquery}}</b></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Reservation Code</th>
                            <th>Reservation At</th>
                            <th>Reservation Date</th>
                            <th>Seat Code</th>
                            <th>Depart At</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($hasil as $r)
                        <tr>
                            <td>{{$r->reservation_code}}</td>
                            <td>{{$r->reservation_at}}</td>
                            <td>{{$r->reservation_date}}</td>
                            <td>{{$r->seat_code}}</td>
                            <td>{{$r->depart_at}}</td>
                            <td>{{$r->price}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


                @else

                Oops.. Data <b>{{$reserquery}}</b> Tidak Tersedi Coba Inputkan Lagi

                @endif


            </div>
</div>
    </div>
</div>
@endsection
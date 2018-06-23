@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">View Rute</div>
<div class="panel-body">
<a href="/reservation">back</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Reservation Code</th>
                            <th>Reservation At</th>
                            <th>Reservation Date</th>
                            <th>Seat Code</th>
                            <th>Depart At</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$reservation->reservation_code}}</td>  
							<td>{{$reservation->reservation_at}}</td>  
							<td>{{$reservation->reservation_date}}</td>  
							<td>{{$reservation->seat_code}}</td>  
							<td>{{$reservation->depart_at}}</td>  
							<td>{{$reservation->price}}</td>  
                        </tr>
                    </tbody>
                </table>
            </div>
</div>
    </div>
</div>
@endsection
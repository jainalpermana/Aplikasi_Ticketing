@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Reservation</div>

<div class="panel-body">
                    

                   <form class="form-horizontal" method="POST" action="/reservation">

                        <div class="form-group{{ $errors->has('reservation_code') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Reservation Code</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="reservation_code" required autofocus>

                                @if ($errors->has('reservation_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reservation_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('reservation_at') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Reservation At</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="reservation_at" required>

                                @if ($errors->has('reservation_at'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reservation_at') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('reservation_date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Reservation Date</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="reservation_date" required>

                                @if ($errors->has('reservation_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reservation_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('seat_code') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Seat Code</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="seat_code" required>

                                @if ($errors->has('seat_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('seat_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('depart_at') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Depart At</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="depart_at" required>

                                @if ($errors->has('depart_at'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('depart_at') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="price" required>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                        </div>
                    </form>
                </div>

    <form action="{{ url('reserquery') }}" method="GET">
        <input type="text" placeholder="Cari...."  name="q">
        <span class="input-gro  up-btn">
            <button class="btn btn-info" type="submit">Cari!</button>
        </span>
    </form>

<div class="panel panel-default">
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
                        @foreach($reservation as $r)
                        <tr>
                            <td>{{$r->reservation_code}}</td>
                            <td>{{$r->reservation_at}}</td>
                            <td>{{$r->reservation_date}}</td>
                            <td>{{$r->seat_code}}</td>
                            <td>{{$r->depart_at}}</td>
                            <td>{{$r->price}}</td>
                            <td>
                                <a type="button" class="btn btn-primary" href="/reservation/{{$r->id}}/edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            </td>
                            <td>
                                <a type="button" class="btn btn-primary" href="/reservation/{{$r->id}}/"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
                            </td>

                            <td>
                                <form action="/reservation/{{$r->id}}" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" name="name" value="delete" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $reservation->links() !!}
            </div>
</div>
    </div>
</div>
@endsection
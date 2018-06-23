
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Reservation</div>

                <div class="panel-body">
                   <form class="form-horizontal" action="/reservation/{{$reservation->id}}" method="post">

                        <div class="form-group{{ $errors->has('reservation_code') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Code</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="reservation_code" value="{{$reservation->reservation_code}}" required autofocus>

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
                                <input type="text" class="form-control" name="reservation_at" value="{{$reservation->reservation_at}}" required>

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
                                <input type="text" class="form-control" name="reservation_date" value="{{$reservation->reservation_date}}" required>

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
                                <input type="text" class="form-control" name="seat_code" value="{{$reservation->seat_code}}" required>

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
                                <input type="text" class="form-control" name="depart_at" value="{{$reservation->depart_at}}" required>

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
                                <input type="text" class="form-control" name="price" value="{{$reservation->price}}" required>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="hidden" name="_method" value="put">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" value="edit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


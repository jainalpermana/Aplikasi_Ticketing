@if(Auth::user()->jabatan == 'admin')
@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Transportasi</div>

                <div class="panel-body">
                   <form class="form-horizontal" action="/trans/{{$trans->id}}" method="post">

                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Code</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="code" value="{{$trans->code}}" required autofocus>

                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="description" value="{{$trans->description}}" required>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('seat_qty') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Seat Qty</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="seat_qty" value="{{$trans->seat_qty}}" required>

                                @if ($errors->has('seat_qty'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('seat_qty') }}</strong>
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

@else

<a href='/home'>Back</a>

@endif
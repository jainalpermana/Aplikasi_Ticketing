@if(Auth::user()->jabatan == 'admin')
@extends('layouts.app1')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Transportasi</div>

<div class="panel-body">
                    

                   <form class="form-horizontal" method="POST" action="/trans">

                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Code</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="code" required autofocus>

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
                                <input type="text" class="form-control" name="description" required>

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
                                <input type="text" class="form-control" name="seat_qty" required>

                                @if ($errors->has('seat_qty'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('seat_qty') }}</strong>
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

    <form action="{{ url('transquery') }}" method="GET">
        <input type="text" placeholder="Cari...."  name="q">
        <span class="input-gro  up-btn">
            <button class="btn btn-info" type="submit">Cari!</button>
        </span>
    </form>

<div class="panel panel-default">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Seat Qty</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($trans as $t)
                        <tr>
                            <td>{{$t->code}}</td>
                            <td>{{$t->description}}</td>
                            <td>{{$t->seat_qty}}</td>
                            <td>
                                <a type="button" class="btn btn-primary" href="/trans/{{$t->id}}/edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            </td>
                            <td>
                                <a type="button" class="btn btn-primary" href="/trans/{{$t->id}}/"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
                            </td>

                            <td>
                                <form action="/trans/{{$t->id}}" method="post">
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
                {!! $trans->links() !!}
            </div>
</div>
    </div>
</div>
@endsection
@else

<a href='/home'>Back</a>

@endif
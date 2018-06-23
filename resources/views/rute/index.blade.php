@if(Auth::user()->jabatan == 'admin')
@extends('layouts.app1')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Rute</div>

<div class="panel-body">
                    

                   <form class="form-horizontal" method="POST" action="/rute">

                        <div class="form-group{{ $errors->has('depart_at') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Depart At</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="depart_at" required autofocus>

                                @if ($errors->has('depart_at'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('depart_at') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rute_form') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Rute Form</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="rute_form" required>

                                @if ($errors->has('rute_form'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rute_form') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('rute_to') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Rute To</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="rute_to" required>

                                @if ($errors->has('rute_to'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rute_to') }}</strong>
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

    <form action="{{ url('rutequery') }}" method="GET">
        <input type="text" placeholder="Cari...."  name="q">
        <span class="input-gro  up-btn">
            <button class="btn btn-info" type="submit">Cari!</button>
        </span>
    </form>

<div class="panel panel-default">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Depart At</th>
                            <th>Rute From</th>
                            <th>Rute to</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rute as $r)
                        <tr>
                            <td>{{$r->depart_at}}</td>
                            <td>{{$r->rute_form}}</td>
                            <td>{{$r->rute_to}}</td>
                            <td>{{$r->price}}</td>
                            <td>
                                <a type="button" class="btn btn-primary" href="/rute/{{$r->id}}/edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            </td>
                            <td>
                                <a type="button" class="btn btn-primary" href="/rute/{{$r->id}}/"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
                            </td>

                            <td>
                                <form action="/rute/{{$r->id}}" method="post">
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
                {!! $rute->links() !!}
            </div>
</div>
    </div>
</div>
@endsection
@else

<a href='/home'>Back</a>

@endif
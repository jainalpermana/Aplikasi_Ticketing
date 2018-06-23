@if(Auth::user()->jabatan == 'admin')
@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Pasien</div>

                <div class="panel-body">
                   <form class="form-horizontal" action="/rute/{{$rute->id}}" method="post">

                        <div class="form-group{{ $errors->has('depart_at') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Depart At</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="depart_at" value="{{$rute->depart_at}}" required autofocus>

                                @if ($errors->has('depart_at'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('depart_at') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rute_form') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Rute From</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="rute_form" value="{{$rute->rute_form}}" required>

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
                                <input type="text" class="form-control" name="rute_to" value="{{$rute->rute_to}}" required>

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
                                <input type="text" class="form-control" name="price" value="{{$rute->price}}" required>

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

@else

<a href='/home'>Back</a>

@endif


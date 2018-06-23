@if(Auth::user()->jabatan == 'admin')
@extends('layouts.app1')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Transportasi</div>

<div class="panel-body">
                    

                   <form class="form-horizontal" method="POST" action="/costomer">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="address" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <input type="radio" name="gender" value="Man"> Man<br>
                                <input type="radio" name="gender" value="Woman"> Woman<br>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
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

    <form action="{{ url('cosquery') }}" method="GET">
        <input type="text" placeholder="Cari...."  name="q">
        <span class="input-gro  up-btn">
            <button class="btn btn-info" type="submit">Cari!</button>
        </span>
    </form>

<div class="panel panel-default">
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
                        @foreach ($costomer as $c)
                        <tr>
                            <td>{{$c->name}}</td>
                            <td>{{$c->address}}</td>
                            <td>{{$c->phone}}</td>
                            <td>{{$c->gender}}</td>
                            <td>
                                <a type="button" class="btn btn-primary" href="/costomer/{{$c->id}}/edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            </td>
                            <td>
                                <a type="button" class="btn btn-primary" href="/costomer/{{$c->id}}/"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
                            </td>

                            <td>
                                <form action="/costomer/{{$c->id}}" method="post">
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
                {!! $costomer->links() !!}
            </div>
</div>
    </div>
</div>
@endsection

@else

<a href='/home'>Back</a>

@endif
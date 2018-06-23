@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if(Auth::user()->jabatan == 'admin')
                    <div class="panel-body">
                        Halaman Admin
                    </div>
                    @else
                    
                   <div class="panel-body">
                        Halaman User
                    </div>
                    @endif
            </div>
        </div>
    </div>
</div>
@endsection


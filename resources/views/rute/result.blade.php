@if(Auth::user()->jabatan == 'admin')
@extends('layouts.app1')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">View Rute</div>
<div class="panel-body">
<a href="/rute">back</a>

@if (count($hasil))
<p>Hasil pencarian : <b>{{$rutequery}}</b></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Depart At</th>
                            <th>Rute From</th>
                            <th>Rute To</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($hasil as $r)
                        <tr>
                            <td>{{$r->depart_at}}</td>
                            <td>{{$r->rute_form}}</td>
                            <td>{{$r->rute_to}}</td>
                            <td>{{$r->price}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


                @else

                Oops.. Data <b>{{$rutequery}}</b> Tidak Tersedi Coba Inputkan Lagi

                @endif


            </div>
</div>
    </div>
</div>
@endsection

@else

<a href='/home'>Back</a>

@endif
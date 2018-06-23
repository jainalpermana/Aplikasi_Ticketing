<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Rute;

class RuteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rute = Rute::paginate(2);
        return view('rute.index',compact('rute'));
    }

    public function search(Request $request)
    {

        $rutequery = $request->get('q');

        $hasil = Rute::where('depart_at', 'LIKE', '%' . $rutequery . '%')->paginate(2);

        return view('rute.result', compact('hasil', 'rutequery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rute = Rute::all();
        return view('rute.create',compact('rute'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'depart_at'         => 'required',
            'rute_form'             => 'required',
            'rute_to'          => 'required',
            'price'          => 'required',
        
        ]);

        $rute = new Rute;

        $rute->depart_at       = $request->depart_at;
        $rute->rute_form           = $request->rute_form;
        $rute->rute_to        = $request->rute_to;
        $rute->price        = $request->price;

        $rute->save();
        return redirect('rute');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rute = Rute::find($id);
        return view('rute.single',compact('rute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rute = Rute::find($id);
        return view('rute.edit',compact('rute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'depart_at'         => 'required',
            'rute_form'             => 'required',
            'rute_to'          => 'required',
            'price'          => 'required',
        
        ]);

        $rute = Rute::find($id);

        $rute->depart_at       = $request->depart_at;
        $rute->rute_form           = $request->rute_form;
        $rute->rute_to        = $request->rute_to;
        $rute->price        = $request->price;

        $rute->save();
        return redirect('rute');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rute = Rute::find($id);

        $rute -> delete();

        return redirect('rute');
    }
}

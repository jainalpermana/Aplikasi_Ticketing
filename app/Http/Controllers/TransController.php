<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trans;

class TransController extends Controller
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
        $trans = Trans::paginate(2);
        return view('trans.index',compact('trans'));
    }

    public function search(Request $request)
    {

        $transquery = $request->get('q');

        $hasil = Trans::where('code', 'LIKE', '%' . $transquery . '%')->paginate(2);

        return view('trans.result', compact('hasil', 'transquery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trans = Trans::all();
        return view('trans.create',compact('trans'));
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
            'code'         => 'required',
            'description'             => 'required',
            'seat_qty'          => 'required',
        
        ]);

        $trans = new Trans;

        $trans->code       = $request->code;
        $trans->description           = $request->description;
        $trans->seat_qty        = $request->seat_qty;

        $trans->save();
        return redirect('trans');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trans = Trans::find($id);
        return view('trans.single',compact('trans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trans = Trans::find($id);
        return view('trans.edit',compact('trans'));
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
            'code'         => 'required',
            'description'             => 'required',
            'seat_qty'          => 'required',
        
        ]);

        $trans = Trans::find($id);

        $trans->code       = $request->code;
        $trans->description           = $request->description;
        $trans->seat_qty        = $request->seat_qty;

        $trans->save();
        return redirect('trans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trans = Trans::find($id);

        $trans -> delete();

        return redirect('trans');
    }
}

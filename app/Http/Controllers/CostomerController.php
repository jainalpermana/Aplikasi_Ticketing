<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\costomer;

class CostomerController extends Controller
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
        $costomer = Costomer::paginate(2);
        return view('costomer.index',compact('costomer'));
    }

    public function search(Request $request)
    {

        $cosquery = $request->get('q');

        $hasil = Costomer::where('name', 'LIKE', '%' . $cosquery . '%')->paginate(2);

        return view('costomer.result', compact('hasil', 'cosquery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $costomer = Costomer::all();
        return view('costomer.create',compact('costomer'));
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
            'name'         => 'required',
            'address'             => 'required',
            'phone'          => 'required',
            'gender'          => 'required',
        
        ]);

        $costomer = new Costomer;

        $costomer->name       = $request->name;
        $costomer->address           = $request->address;
        $costomer->phone        = $request->phone;
        $costomer->gender        = $request->gender;

        $costomer->save();
        return redirect('costomer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $costomer = Costomer::find($id);
        return view('costomer.single',compact('costomer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $costomer = Costomer::find($id);
        return view('costomer.edit',compact('costomer'));
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
            'name'              => 'required',
            'address'           => 'required',
            'phone'             => 'required',
            'gender'            => 'required',
        
        ]);

        $costomer = Costomer::find($id);

        $costomer->name         = $request->name;
        $costomer->address      = $request->address;
        $costomer->phone        = $request->phone;
        $costomer->gender       = $request->gender;

        $costomer->save();
        return redirect('costomer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $costomer = Costomer::find($id);

        $costomer -> delete();

        return redirect('costomer');

    }
}

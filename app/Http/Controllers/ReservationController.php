<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reservation;

class ReservationController extends Controller
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
        $reservation = Reservation::paginate(2);
        return view('reservation.index',compact('reservation'));
    }

    public function search(Request $request)
    {

        $reserquery = $request->get('q');

        $hasil = Reservation::where('reservation_code', 'LIKE', '%' . $reserquery . '%')->paginate(2);

        return view('reservation.result', compact('hasil', 'reserquery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reservation = Reservation::all();
        return view('reservation.create',compact('reservation'));
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
            'reservation_code'         => 'required',
            'reservation_at'             => 'required',
            'reservation_date'          => 'required',
            'seat_code'          => 'required',
            'depart_at'          => 'required',
            'price'          => 'required',
        
        ]);

        $reservation = new Reservation;

        $reservation->reservation_code       = $request->reservation_code;
        $reservation->reservation_at           = $request->reservation_at;
        $reservation->reservation_date        = $request->reservation_date;
        $reservation->seat_code        = $request->seat_code;
        $reservation->depart_at        = $request->depart_at;
        $reservation->price        = $request->price;

        $reservation->save();
        return redirect('reservation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservation::find($id);
        return view('reservation.single',compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::find($id);
        return view('reservation.edit',compact('reservation'));
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
            'reservation_code'         => 'required',
            'reservation_at'             => 'required',
            'reservation_date'          => 'required',
            'seat_code'          => 'required',
            'depart_at'          => 'required',
            'price'          => 'required',
        
        ]);

        $reservation = Reservation::find($id);

        $reservation->reservation_code       = $request->reservation_code;
        $reservation->reservation_at           = $request->reservation_at;
        $reservation->reservation_date        = $request->reservation_date;
        $reservation->seat_code        = $request->seat_code;
        $reservation->depart_at        = $request->depart_at;
        $reservation->price        = $request->price;

        $reservation->save();
        return redirect('reservation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);

        $reservation -> delete();

        return redirect('reservation');
    }
}

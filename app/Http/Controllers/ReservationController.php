<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();

        return view('reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create');
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
            'first_name' => 'required',
            'last_name' => 'required',
            'reservation_date' => 'required',
            'phone' => 'required',
            'no_of_people' => 'required',
        ]);

        $reservation = Reservation::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'reservation_date' => $request->reservation_date,
            'phone' => $request->phone,
            'no_of_people' => $request->no_of_people,
            'email' => $request->email,
            'more_info' => $request->more_info

        ]);

        toastr()->success('Reservation has been created successfully!');

        return redirect()->back();
        // return redirect()->route('reservations.show', $reservation->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);

        return view('reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);

        return view('reservations.edit', compact('reservation'));
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
            'first_name' => 'required',
            'last_name' => 'required',
            'reservation_date' => 'required',
            'phone' => 'required',
            'no_of_people' => 'required'
        ]);

        $reservation = Reservation::whereId($id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'reservation_date' => $request->reservation_date,
            'phone' => $request->phone,
            'no_of_people' => $request->no_of_people,
            'email' => $request->email,
            'more_info' => $request->more_info

        ]);

        toastr()->success('Reservation has been updated successfully!');

        return redirect()->route('reservations.show', $id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);

        $reservation->delete();

        return redirect()->route('reservations.index');
    }
}

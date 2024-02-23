<?php

namespace App\Http\Controllers;
use App\Models\client;
use App\Models\Service;
use App\Models\Reservation;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create(){
        $clients = client::all();
        $services=Service::all();


        return view('reservation.create',compact('clients','services'));
    }

    public function store(Request $request){
        $request->validate([
            'client_id'=>'required|exists:clients,id',
            'services'=>'required|array',
            'services.'=>'exists:services,id',
        ]);

        $reservation = Reservation::create([
            'client_id'=>$request->input('client_id'),
        ]);

        $reservation->services()->attach($request->input('services'));

        return redirect()->route('create.reservation')->with('success','Reservation created succesfully');
    }
}

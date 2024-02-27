<?php

namespace App\Http\Controllers;
use App\Models\client;
use App\Models\Reservation;
use App\Models\ServiceOfArtisan;

use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function create(Request $request){
        // $clientId = auth()->user()->client->id;

        // dd($request->input('timing'));
        $serviceIds = $request->input('service_ids');


        $reservation = Reservation::create([
            'timing' => $request->input('timing'),
            'description' => $request->input('description'),
            'client_id' => $request->input('client_id'),
            'status' => 'pending', 
        ]);

        foreach ($serviceIds as $serviceId) {
            $service = ServiceOfArtisan::find($serviceId);
            $reservation->ServiceOfArtisan()->attach($service);
        }

        return redirect()->route('reservation.index')->with('success', 'Reservation created successfully!');

    }
}




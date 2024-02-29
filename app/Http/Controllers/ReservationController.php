<?php

namespace App\Http\Controllers;
use App\Models\client;
use App\Models\Reservation;
use App\Models\ServiceOfArtisan;
use App\Models\Rating;

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
            'client_id' => auth()->user()->client->id,
            'status' => 'pending', 
        ]);

        foreach ($serviceIds as $serviceId) {
            $service = ServiceOfArtisan::find($serviceId);
            $reservation->ServiceOfArtisan()->attach($service);
        }

        return redirect()->route('display.reservation')->with('success', 'Reservation created successfully!');

    }


    public function showReservations()
    {
        $client = auth()->user()->client->first();

        $reservations = $client->reservations;

        return view('client.reservation', compact('reservations'));
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('reservations.index')
            ->with('success', 'Reservation deleted successfully');
    }


    public function completeReservation($id)
    {
        $reservation = Reservation::findOrFail($id);
    
 
    
        if ($reservation->rating) {
            return redirect()->back()->with('error', 'A rating has already been submitted for this reservation.');
        }
    
    
        $rating ->new Rating([
            'rating' => request('rating'), 
            'comment' => request('comment'),
        ]);
    
        $reservation->rating()->save($rating);
    
        return redirect()->back()->with('success', 'Rating submitted successfully.');
    }
}




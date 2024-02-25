<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\Profession;
use App\Models\Service;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct(){
    //     $this->middleware('auth');

    // }
    public function index()
    {
        return view('client.show');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validated();

        return redirect()->route('client.index')->with('success', 'votre Compte est bien créé.');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $profession = Profession::find(1);
        $services = Service::all();
        return view('client.select',compact('profession','services'));
    }
   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(client $client)
    {
        $this->authorize('update',$client);
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $client)
    {
        $client->delete();
        return to_route('client.index')->with('success','Le client a ete bien supprimer ');
    }
}

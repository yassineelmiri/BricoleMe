<?php

namespace App\Http\Controllers;

use App\Models\artisan;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(artisan $artisan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(artisan $artisan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, artisan $artisan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(artisan $artisan)
    {
        $artisan->delete();
        return to_route('artisan.index')->with('success','Le artisan a ete bien supprimer ');
    }

}

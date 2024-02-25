<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtisanRequest;
use App\Models\artisan;
use App\Models\Services;
use App\Models\Profession;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ArtisanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $professions = Profession::all();
        $services = Services::all();
        return view('artisan.index',compact('users','professions','services'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artisan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validated();
        $formFields['password'] = Hash::make($request->password);
        $this->uploadImage($request, $formFields);
        artisan::create($formFields);
        return redirect()->route('profiles.index')->with('success', 'votre Artisan est bien créé.');
    }

    /**
     * Display the specified resource.
     */
    public function show(artisan $artisan)
    {
        $artisan = artisan::all();
        return view('artisan.show',compact('artisan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(artisan $artisan)
    {
        $this->authorize('update',$artisan);

        return view('artisan.edit', compact('artisan'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, artisan $artisan)
    {
        $formFields = $request->validated();
        $formFields['password'] = Hash::make($request->password);
        $this->uploadImage($request, $formFields);
        $artisan->fill($formFields)->save();
        return to_route('artisan.show', $artisan->id)->with('success', 'Le artisan a élé bien Modification');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(artisan $artisan)
    {
        $artisan->delete();
        return to_route('artisan.index')->with('success','Le artisan a ete bien supprimer ');
    }
    private function uploadImage(ArtisanRequest $request, array &$formFields)
    {
        unset($formFields['image']);
        if ($request->hasfile('image')) {
            $formFields['image'] = $request->file('image')->store('profile', 'public');
        }
    }

   

}

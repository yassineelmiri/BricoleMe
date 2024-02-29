<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtisanRequest;

use App\Models\ProfessionsOfArtisan;
use App\Models\Service;
use App\Models\ServiceOfArtisan;
use App\Models\ServiceOfProfession;

use App\Models\Profession;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


    public function services()
    {

        $current_artisan = Auth::user()->artisan->id;
        $current_artisan_profession = ProfessionsOfArtisan::where('artisan_id',$current_artisan)->first();
        $services_of_profession = ServiceOfProfession::where('profession_id',$current_artisan_profession->id)->get();
        $serviceIds = $services_of_profession->pluck('service_id')->toArray();
        $services_of_profession_of_artisan = Service::whereIn('id',$serviceIds)->get();

        return view('artisan.services',compact('services_of_profession_of_artisan'));
    }

    private function uploadImage(ArtisanRequest $request, array &$formFields)
    {
        unset($formFields['image']);
        if ($request->hasfile('image')) {
            $formFields['image'] = $request->file('image')->store('profile', 'public');
        }
    }

    public function servicesOfArtisan()
    {
        $logged_artisan = Auth::user()->artisan->id;
        $services = ServiceOfArtisan::where('artisan_id',$logged_artisan)->get();
        $serviceIds = $services->pluck('service_id')->toArray();
        $services = Service::whereIn('id',$serviceIds)->get();
        return response()->json($services);

    }

    public function deleteServiceOfArtisan(Request $request)
    {
       if(isset($request->delete)){
           try{
               $skill = urldecode($request->skill);
               $service = Service::where('skill', $skill)->firstOrFail();
               $serviceOfArtisan = ServiceOfArtisan::where('service_id', $service->id);
               $serviceOfArtisan->delete();
               $logged_artisan = Auth::user()->artisan->id;
               $services = ServiceOfArtisan::where('artisan_id',$logged_artisan)->get();
               $serviceIds = $services->pluck('service_id')->toArray();
               $services = Service::whereIn('id',$serviceIds)->get();
               return response()->json($services);
           }
           catch(\PDOException $e){
               abort(404,$e->getMessage());
           }
       }
    }

    public function addServiceOfArtisan(Request $request)
    {
        if (isset($request->add)){
            try{
                $service_id = $request->service_id;
                $artisan_id = Auth::user()->artisan->id;
                $price = $request->price;

                ServiceOfArtisan::create([
                    'artisan_id' => $artisan_id,
                    'service_id' => $service_id,
                    'price' => $price
                ]);
                $logged_artisan = Auth::user()->artisan->id;
                $services = ServiceOfArtisan::where('artisan_id',$logged_artisan)->get();
                $serviceIds = $services->pluck('service_id')->toArray();
                $services = Service::whereIn('id',$serviceIds)->get();
                return response()->json($services);
            }
            catch(\PDOException $e){
                abort(404,$e->getMessage());
            }


        }
    }




}

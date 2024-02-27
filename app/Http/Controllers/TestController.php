<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\Profession;
use App\Models\ProfessionsOfArtisan;
use App\Models\Services;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\ServiceOfArtisan;

use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController
{
    
    public function test($id)
    { 
        $profession = Profession::find($id);
        $services = Services::where('profession_id', $id)->get();
     
        return view('client.select', compact('profession', 'services'));
    }
    
    public function artisan()
    {
        $artisan = Artisan::where('user_id', Auth::user()->id)->firstOrFail();
        $ProfessionsOfArtisan = ProfessionsOfArtisan::where('artisan_id', $artisan->id )->firstOrFail();
        $Profession= Profession::where('id', $ProfessionsOfArtisan->profession_id )->firstOrFail();   
        $services = services::where('profession_id', $Profession->id)->get();
        return view('artisan.artisan',compact('Profession','services'));
    }
    public function client()
    {
        return view('client.client');
    }
    public function edit()
    {
        return view('artisan.edit');
    }
    public function index()
    {
        return view('artisan.index');
    }



    

}

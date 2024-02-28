<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\Profession;
use App\Models\ProfessionsOfArtisan;
use App\Models\Services;
use App\Models\User;
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
    
    public function artisan($id)
    {
        

        $artisan = Artisan::where('user_id', Auth::user()->id)->firstOrFail();
        
        $user = User::where('id',$id)->firstOrFail();
        $ProfessionsOfArtisan = ProfessionsOfArtisan::where('artisan_id', $artisan->id )->firstOrFail();
        $Profession= Profession::where('id', $ProfessionsOfArtisan->profession_id )->firstOrFail();   
        $services = services::where('profession_id', $Profession->id)->get();
        return view('artisan.artisan',compact('Profession','services','user'));
    }
    public function client()
    {
        return view('client.client');
    }
    public function edit($edit)
    {
        
        $client = User::where('id', $edit )->firstOrFail();


        return view('artisan.edit',compact('client'));
    }
    public function detail($id)
    {

        
        $client = User::where('id', $id )->firstOrFail();

        return view('client.client',compact('client'));
    }



    

}

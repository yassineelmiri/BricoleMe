<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use App\Models\Services;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\ServiceOfArtisan;

use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController
{
    
    public function test()
    { 
        $profession = Profession::find(1);
        $services = Services::where('profession_id', 1)->get();
     
        return view('client.select', compact('profession', 'services'));
    }
    
    public function artisan()
    {
        $services = ServiceOfArtisan::all(); 
        return view('artisan.artisan', compact('services'));
    }
    public function client()
    {
        return view('client.client');
    }
    public function edit()
    {
        return view('artisan.edit');
    }



    

}

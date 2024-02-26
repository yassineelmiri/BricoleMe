<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use App\Models\Services;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
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
        return view('artisan.artisan');
    }
    public function client()
    {
        return view('client.client');
    }
    

}

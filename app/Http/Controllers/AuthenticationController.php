<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\Image;
use App\Models\Profession;
use App\Models\ProfessionsOfArtisan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class AuthenticationController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function artisanRegistrationPage()
    {

        $cache_key = 'cities';

        if(Cache::has($cache_key)){
            $cities = Cache::get($cache_key);
        }

        else{
            $cities_json_file = Storage::disk('local')->get('json/cities.json');
            $array_of_cities = json_decode($cities_json_file);
            $cities = array_column($array_of_cities,'ville');
            Cache::put($cache_key,$cities);
        }


        $professions = Profession::all();
        return view('auth.artisan.register',[
            'professions' => $professions,
            'cities' => $cities
        ]);
    }


    public function customerRegistrationPage()
    {
        $cache_key = 'cities';

        if(Cache::has($cache_key)){
            $cities = Cache::get($cache_key);
        }

        else{
            $cities_json_file = Storage::disk('local')->get('json/cities.json');
            $array_of_cities = json_decode($cities_json_file);
            $cities = array_column($array_of_cities,'ville');
            Cache::put($cache_key,$cities);
        }
        return view('auth.customer.register',['cities'=>$cities]);
    }

    public function artisanRegistration(Request $request)
    {
       if(isset($request->add)){

           $request->validate([
               'name' => 'required' ,
               'email' => 'required|email',
               'password' => 'required',
               'profession' => 'required',
               'city' => 'required',
               'phone_number' => 'required|digits:10',
               'images.*' => 'required|image|max:2048'
           ]);

           $user_data = $request->only(['name','email','password','city','phone_number']);

           $user = User::create($user_data);

           $artisan = Artisan::create(['user_id' =>$user->id ]);

           ProfessionsOfArtisan::create(['artisan_id' => $artisan->id , 'profession_id' => $request->profession]);

           $images = $request->file('images');

           foreach ($images as $img){
               $image_name = date('YmdHis').'.'.$img->getClientOriginalExtension();
               $img->storeAs('public/uploads',$image_name);

               Image::create(['artisan_id' => $artisan->id , 'path' => $image_name]);
           }

           return response()->json(['success' , 'Registred Successfully , Please Log In !']);
       }
    }

}

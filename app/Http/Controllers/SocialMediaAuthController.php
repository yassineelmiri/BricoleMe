<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\Customer;
use App\Models\Image;
use App\Models\Profession;
use App\Models\ProfessionsOfArtisan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class SocialMediaAuthController extends Controller
{

    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function registerRedirect(){
        return view('auth.social.redirect');
    }

    public function handleGoogleResponse(){
        try{
            $social_user = Socialite::driver('google')->user();
            $existingUser = User::where('social_provider_id',$social_user->id)->first();

            if($existingUser){
                 Auth::login($existingUser);

                if($existingUser->is_artisan()){
                    Session::put('role','artisan');
                    return redirect()->route('artisan.dashboard');
                }
                else if($existingUser->is_customer()){
                    Session::put('role','customer');
                    return redirect()->route('customer.dashboard');
                }
            }
            else{
                Session::put('social_user',$social_user);
                return redirect()->route('auth.register.redirect');
            }
        }
        catch (\PDOException $e){
            die($e->getMessage());
        }
    }

    public function handleFacebookResponse(){
        try{
            $social_user = Socialite::driver('facebook')->user();
            $existing_user = User::where('social_provider_id',$social_user->id)->first();

            if($existing_user){
                Auth::login($existing_user);

                if($existing_user->is_artisan()){
                    Session::put('role','artisan');
                    return redirect()->route('artisan.dashboard');
                }
                else if($existing_user->is_customer()){
                    Session::put('role','customer');
                    return redirect()->route('customer.dashboard');
                }
            }
            else{
                Session::put('social_user',$social_user);
                return redirect()->route('auth.register.redirect');
            }
        }
        catch (\PDOException $e){
            die($e->getMessage());
        }
    }


    public function socialArtisanRegister()
    {
        $professions = Profession::all();
        $cache_key = 'cities';

        $social_user = Session::get('social_user');



        if(Cache::has($cache_key)){
            $cities = Cache::get($cache_key);
        }

        else{
            $cities_json_file = Storage::disk('local')->get('json/cities.json');
            $array_of_cities = json_decode($cities_json_file);
            $cities = array_column($array_of_cities,'ville');
            Cache::put($cache_key,$cities);
        }
        return view('auth.social.social-artisan',[
            'cities'=>$cities,
            'professions' => $professions,
            'name' =>$social_user->name,
            'email' => $social_user->email,
            'social_provider_id' => $social_user->id
        ]);
    }

    public function socialCustomerRegister()
    {
        $cache_key = 'cities';
        $social_user = Session::get('social_user');

        if(Cache::has($cache_key)){
            $cities = Cache::get($cache_key);
        }
        else{
            $cities_json_file = Storage::disk('local')->get('json/cities.json');
            $array_of_cities = json_decode($cities_json_file);
            $cities = array_column($array_of_cities,'ville');
            Cache::put($cache_key,$cities);
        }
        return view('auth.social.social-customer',[
            'cities'=>$cities,
            'name' =>$social_user->name,
            'email' => $social_user->email,
            'social_provider_id' => $social_user->id
        ]);
    }

    public function socialArtisanRegistration(Request $request)
    {
        if(isset($request->add)){
            $request->validate([
                'name' => 'required' ,
                'email' => 'required|email',
                'profession' => 'required',
                'city' => 'required',
                'phone_number' => 'required|digits:10',
                'images.*' => 'required|image|max:2048'
            ]);

            $user_data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make('email'),
                'phone_number' => $request->phone_number,
                'city' => $request->city,
                'social_provider_id' => $request->social_provider_id
            ];

//            $user_data['password'] = Hash::make('name'.",".'email');

            $user = User::create($user_data);

            $artisan = Artisan::create(['user_id' =>$user->id]);

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


    public function socialCustomerRegistration(Request $request){
        $request->validate([
            'name' => 'required' ,
            'email' => 'required|email',
            'city' => 'required',
            'phone_number' => 'required|numeric|digits:10'
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'city' => $request->input('city'),
            'phone_number' =>$request->input('phone_number'),
            'social_provider_id' => $request->input('social_provider_id')
        ];

//       $data = $request->only('name,email,password,city,phone_number');
        $user = User::create($data);
        Customer::create(['user_id' => $user->id]);


        return redirect()->route('login.view')->with('success','Registration made successfully ! Please Log In');
    }


}

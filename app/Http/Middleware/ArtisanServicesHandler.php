<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use function PHPUnit\Framework\isEmpty;
use const http\Client\Curl\AUTH_ANY;

class ArtisanServicesHandler
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $logged_artisan = Auth::user()->artisan;

        if($logged_artisan->services->isEmpty()){
            return redirect()->route('artisan.services');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use App\Models\activity_log;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Stevebauman\Location\Facades\Location;

class LogUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $ip = $request->ip();
        $location = Location::get($ip);
        // $location = Location::get('8.8.8.8');
        $country = $location && isset($location->countryName) ? $location->countryName : 'Unknown';
        $city = $location && isset($location->cityName) ? $location->cityName : 'Unknown';

        $device = $request->header('User-Agent');
        $agent = new \Jenssegers\Agent\Agent();
        $agent->setUserAgent($device);

        activity_log::create([
            'user_id' => Auth::guard('web')->check() ? Auth::guard('web')->id() : null,
            'action' => $request->method(),
            'details' => json_encode([
                'url' => $request->fullUrl(),
                'input' => $request->except(['password', 'password_confirmation']),
            ]),
            'ip_address' => $ip,
            'user_agent' => $device,
            'country' => $country,
            'city' => $city,
            'device_type' => $agent->device(),
            'platform' => $agent->platform(),
            'browser' => $agent->browser(),
        ]);


        return $response;
    }
}

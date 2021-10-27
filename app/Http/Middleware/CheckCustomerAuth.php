<?php

namespace App\Http\Middleware;
use App\Models\UserDevices;
use Closure;

class CheckCustomerAuth
{
    public function handle($request, Closure $next, $guard = null)
    {
        $token = $request->header('infocom-token');
        if ($token) {
            $result = UserDevices::select("user_id")->where(["device_token" => $token])->first();
            if ($result) {
                $request->merge(['decoded' => $result]);
                return $next($request);
            } else {
                return response()->json([
                    'message' => 'Unauthorized access'
                ], 401);
            }            
        } else {
            return response()->json([
                'message' => 'Unauthorized access'
            ], 401);
        }
    }
}

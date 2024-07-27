<?php

namespace App\Http\Middleware;

use App\Helpers\PermissionsHelper;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Mute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the authenticated user has the required permission
        if (! PermissionsHelper::hasMutePermission()) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}

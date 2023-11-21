<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = $request->user();

        if (!$user) {
            // Redirect or handle unauthorized access
            return redirect()->route('login');
        }

        // Check if the user's role is allowed for the current route
        if (in_array($user->role, $roles)) {
            return $next($request);
        }

        // Redirect to the 401 error page
        return redirect()->route('error.unauthorized');

    }
}

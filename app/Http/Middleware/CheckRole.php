<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        {
            if (!Auth::check()) {
                return redirect('login');
            }

            $user = Auth::user();

            if ($user->role != $role) {
                return redirect('home'); // Vous pouvez rediriger vers une page d'erreur ou une autre page
            }

            return $next($request);

    }
}
}

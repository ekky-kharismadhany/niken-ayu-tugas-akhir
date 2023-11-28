<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class CheckUserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() === null) {
            return $next($request);
        }
        $user = Auth::user();
        if ($user->email !== "admin@beridampak.my.id") {
            return $next($request);
        }
        $adminAllowedRoutes = ["/admin", "admin-user"];
        if (!in_array($request->path(), $adminAllowedRoutes)) {
            abort(Response::HTTP_FORBIDDEN, "Halaman khusus untuk pengguna");
        }
        return $next($request);
    }
}

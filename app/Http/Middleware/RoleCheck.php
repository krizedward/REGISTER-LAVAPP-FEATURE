<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // $user = Auth::user();
        
        // if($user) {
        //     return $next($request);
        // }

        if (!Auth::check() || Auth::user()->role !== $role) {
            // Jika pengguna tidak login atau tidak memiliki peran yang tepat,
            // arahkan mereka ke halaman login atau halaman lain
            return redirect('login')->with('error','You do not have access to this page.');
        }

        return redirect('home');
    }

}
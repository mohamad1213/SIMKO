<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserIsActive
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->status !== 'active') {
            auth()->logout();
            return redirect()->route('login')
                ->with('error', 'Akun Anda belum diverifikasi admin.');
        }

        return $next($request);
    }
}

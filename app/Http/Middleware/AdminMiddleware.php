<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Jika belum login, tendang ke halaman login
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        // Jika sudah login tapi role-nya bukan admin, tendang ke halaman depan
        if (Auth::user()->role !== 'admin') {
            return redirect('/');
        }

        return $next($request);
    }
}
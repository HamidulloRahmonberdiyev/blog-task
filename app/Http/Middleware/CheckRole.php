<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        if ($request->user()->role->name == $role) {
            return $next($request);
        }elseif ($request->user()->role->name == 'admin') {
            return $next($request);
        }
        abort(403);
    }
}

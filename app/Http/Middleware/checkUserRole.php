<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response; // Perbaiki namespace ini
use Illuminate\Http\RedirectResponse;

class CheckUserRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        return redirect('/login');
    }

}


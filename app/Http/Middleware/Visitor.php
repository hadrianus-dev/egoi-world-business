<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visitor as Visitors;
use Illuminate\Http\Request;

class Visitor
{
    public function handle(Request $request, Closure $next)
    {
        $ip = hash('sha512', $request->ip());
        if (Visitors::where('date', today())->where('ip', $ip)->count() < 1)
        {
            Visitors::create([
                'date' => today(),
                'user_agent' => $request->userAgent(),
                'ip' => $ip,
            ]);
        }
        return $next($request);
    }
}

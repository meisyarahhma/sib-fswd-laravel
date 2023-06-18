<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Product
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $product)
    {
        $explode = explode('|', $product);

        foreach ($explode as $key => $value) {
            if ($request->product()->status->name == $value) {
                return $next($request);
            }
        }

        return abort(403);
    }
}

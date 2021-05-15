<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        if ($request->user()->usertype_id != 5) {
            return redirect('/');
        }

        return $next($request);
    }

}

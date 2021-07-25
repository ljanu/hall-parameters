<?php
declare(strict_types=1);

namespace Tudy\HallParameters\Http\Controllers\HallParameters\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HallParameters
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param int $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, int $role = 1): mixed
    {
        empty($role) ?? abort(403);


        return $next($request);
    }
}
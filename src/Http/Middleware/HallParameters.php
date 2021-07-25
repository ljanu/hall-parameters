<?php
declare(strict_types=1);

namespace Tudy\HallParameters\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HallParameters
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param int $role
     * @return Response
     */
    public function handle(Request $request, Closure $next, int $role = 1): Response
    {
        ddd($request);
        empty($role) ?? abort(403);


        return $next($request);
    }
}
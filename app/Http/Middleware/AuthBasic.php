<?php

namespace App\Http\Middleware;

use Closure;

class AuthBasic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $authUser = env('AUTH_BASIC_USERNAME');
        $authPass = env('AUTH_BASIC_PASS');
        header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
        $hasNotSuppliedCredentials = (empty($_SERVER['PHP_AUTH_USER']) || empty($_SERVER['PHP_AUTH_PW']));
        $isNotAuthenticated = (
            $hasNotSuppliedCredentials ||
            $_SERVER['PHP_AUTH_USER'] != $authUser ||
            $_SERVER['PHP_AUTH_PW'] != $authPass
        );

        if ($isNotAuthenticated) {
            header('WWW-Authenticate: Basic realm="Access denied"');
            header('HTTP/1.1 401 Authorization Required');
            exit;
        }

        return $next($request);
    }
}

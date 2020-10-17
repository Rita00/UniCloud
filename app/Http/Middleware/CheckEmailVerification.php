<?php


namespace App\Http\Middleware;


use Closure;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Redirect;

class CheckEmailVerification
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null $redirectToRoute
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $redirectToRoute = null)
    {
        if (!$request->user() || ($request->user() instanceof MustVerifyEmail &&!$request->user()->hasVerifiedEmail())) {
            return Redirect::route($redirectToRoute ?: 'resend');
        }
        return $next($request);
    }
}

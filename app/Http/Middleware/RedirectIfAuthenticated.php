<?php

namespace App\Http\Middleware;

use App\Core\Domain\Models\Eloquents\User\User;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {

        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::user();
                $user_model = User::find($user->id);
                if ($user_model->isAdmin())
                    return redirect(RouteServiceProvider::HOME_ADMIN);
                else
                    return redirect(RouteServiceProvider::HOME_USER);
            }
        }

        return $next($request);
    }
}

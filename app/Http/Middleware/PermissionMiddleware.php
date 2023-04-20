<?php

namespace App\Http\Middleware;

use App\Core\Domain\Models\Eloquents\Permission\Permission;
use App\Core\Domain\Models\Eloquents\User\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$routes)
    {
        if (!Auth::check()) {
            // Redirect the user to the login page
            return redirect('/login');
        }

        $user = Auth::user();
        $user_model = User::find($user->id);
        if ($user_model->hasPermission($routes)) {
            return $next($request);
        }

        // Return a 403 Forbidden response
        return abort(403, 'Unauthorized action.');
    }
}

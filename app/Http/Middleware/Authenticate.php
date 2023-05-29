<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // Redirect to admin login page if the user is trying to access an admin page
        if ($request->is('admin') || $request->is('admin/*'))
            return route('admin.login');
        else
            return $request->expectsJson() ? null : route('login');
    }
}

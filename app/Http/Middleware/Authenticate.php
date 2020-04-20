<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        //check here if the user is authenticated
        if ( ! $this->auth->user() )
        {
            return route('to.login');
            // here you should redirect to login 
        }
        // if (! $request->expectsJson()) {
        // }
    }
}

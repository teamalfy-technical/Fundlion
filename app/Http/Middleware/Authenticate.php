<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

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
        if (! $request->expectsJson()) {

            $url = $_SERVER['REQUEST_URI'];
            $link_array = explode('/',$url);
            $link = $link_array[2];
            if ($link === "clients") {return route('clients.login');}
            if ($link === "users") {return route('users.login');}
//            if($request->user()->active !== '1') { return redirect('logout'); }
//            if($request->user('admin')->active !== '1') { return redirect('logout'); }
        }

        if (Auth::guest()) {
            //is a guest so redirect
            return redirect(route('pages.home'));
        }
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->get('user_type') != 'User'){
            echo"
                <script>
                    alert('You must be logged in to access this page');
                    window.location.href ='/login';
                </script>
            ";
        }
        return $next($request);
    }
}
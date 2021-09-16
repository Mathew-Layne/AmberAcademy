<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
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
        if(session()->get('user_type') != 'Admin'){
            echo"
                <script>
                    alert('Only Admin is able to access this page.');   
                    window.location.href ='/';        
                </script>
            ";            
        }
        
        return $next($request);
    }
}

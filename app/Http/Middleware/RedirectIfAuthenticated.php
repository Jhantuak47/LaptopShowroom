<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Log;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            //return redirect('/home');
            return redirect($this->redirectTo());
        }

        return $next($request);
    }

   protected function redirectTo(){
       $user=Auth::user();
           if($user->account_type == 1){
               Log::info("from redirectTo 1");
               return '/admin/dashboard';
           }else if($user->account_type == 2){
               return '/doctor/dashboard';
           }else
               return '/user/dashboard';
   }
}

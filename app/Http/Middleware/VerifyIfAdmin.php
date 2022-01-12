<?php

namespace App\Http\Middleware;

use Closure;

class VerifyIfAdmin
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
        if(!empty($request->user())){
            if($request->user()->level_user!='admin'){
                if($request->wantsJson()){
                return response()->json(['message', 'Kamu tidak memiliki akses ke halaman ini'], 403);
            }
            abort(403, 'Kamu tidak memiliki akses ke halaman ini');
            }
        }else{
            return redirect('panel/login');
        }
        
        return $next($request);
    }
}

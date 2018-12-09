<?php

namespace App\Http\Middleware;

use Closure;

class userCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $unionid = session('union_id');
        if (empty($unionid)) {
            if (env('APP_ENV') == 'local') {
                session(['unionid' => env('UNIONID')]);
                return $next($request);
            }
            $tmp_redirect_url = $request->url();
            session(['tmp_redirect_url' => $tmp_redirect_url]);
            return redirect()->route('login');
//            return \Socialite::with('weixin')->redirect();
        }
        return $next($request);
    }
}

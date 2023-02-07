<?php

namespace Arcanedev\Localization\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Install;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;

class LocaleAuth extends Middleware
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

        try {
        
            if ( Cookie::get('verify_token') === null || ( !empty( Install::first()->token ) && Cookie::get('verify_token') !== Install::first()->token ) ) {

                if ( Http::get('https://envato.themeluxury.com/activation/sumoseotools.php?code=' . Install::first()->token . '&domain=' . url('/') )['status'] == 'success' ) {
                
                    Cookie::queue('verify_token', Install::first()->token, 10080);
                    
                } else return redirect()->away('https://codecanyon.net/item/sumoseotools-online-seo-tools-script/37326812');

            }

        } catch (\Exception $e) {}

        return $next($request);

    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
{
    if (session()->has('locale')) {
        app()->setLocale(session()->get('locale'));
    } else {

        $browserLang = $request->getPreferredLanguage(['en', 'lv']);
        app()->setLocale($browserLang);
        
        session()->put('locale', $browserLang);
    }

    return $next($request);
}
}
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     *
     * TODO: Add session support
     */
    public function handle(Request $request, Closure $next)
    {
        $available_locales = ["de", "fr"];
        $browser_lang = substr($request->server("HTTP_ACCEPT_LANGUAGE"), 0, 2);
        if (isset($_COOKIE["locale"]) && in_array($_COOKIE["locale"], $available_locales)) {
            $locale = $_COOKIE["locale"];
        } else if (in_array($browser_lang, $available_locales)) {
            $locale = $browser_lang;
        } else {
            $locale = "de";
        }
        setcookie("locale", $locale, time() + (86400 * 5), "/");
        app()->setLocale($locale);
        return $next($request);
    }
}

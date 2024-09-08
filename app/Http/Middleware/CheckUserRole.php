<?php

namespace App\Http\Middleware;

use App\Models\Module;
use Closure;
use Illuminate\Http\Request;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, String $module)
    {
        if ($module == "") {
            $module = $request->route('module');
        }

        if (!auth()->user()->rol->status) {
            return redirect()->route('index');
        } else {
            foreach (auth()->user()->rol->rol_module_acces as $access) {

                if ($access->module->prefix == $module && !$access->status && $access->permission->name == 'read') {
                    return redirect()->route('index');
                }
            }
            if (auth()->user()->rol->rol_module_acces->empty()) {
                return redirect()->route('index');
            }
        }
        return $next($request);
    }
}

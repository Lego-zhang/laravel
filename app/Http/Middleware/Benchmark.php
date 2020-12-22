<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Benchmark
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
//         前置中间件
        $sTime = microtime(true);
        $reponse = $next($request);
//         后置中间件
        $runTime = microtime(true) - $sTime;
        Log::info('benchmark',[
            'url' => $request->url(),
            'input'=> $request->input(),
            'time' => "$runTime ms"
        ]);

        return $reponse;

    }
}

<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;

class LogMiddleware
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
        //file_put_contens('C:/Data/access.log', data('Y-m-d H:i:s')."\n",FILE_APPEND);
        //b.次のミドルウェアを呼び出す
        echo 'きてますよ～';
        
        //a.アクションを実行
        $response = $next($request);

        //b.レスポンスの内容を加工
        $response->setContent(mb_strtoupper($response->content()));
        return $response;
    }
}

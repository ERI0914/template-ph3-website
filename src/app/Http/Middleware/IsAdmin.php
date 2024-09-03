<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // ユーザーがログインしていて、かつ 'is_admin' カラムが true の場合
        if (auth()->check() && auth()->user()->is_admin) {
            // リクエストを次に進める
            return $next($request);
        }

        // 管理者でない場合、トップページにリダイレクト
        return redirect('/');
    }
}

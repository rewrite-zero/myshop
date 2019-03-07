<?php

namespace App\Http\Middleware;

use Closure;

class AdminLoginMiddleware
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
        if ($request->session()->has('adminname')) {
            //和session权限信息做对比
            //获取访问的控制器和方法
            $action = $request->route()->getActionMethod();
            $actions=explode('\\', \Route::current()->getActionName());
             //或$actions=explode('\\', \Route::currentRouteAction());
            $modelName=$actions[count($actions)-2]=='Controllers'?null:$actions[count($actions)-2];
            $func=explode('@', $actions[count($actions)-1]);
            $controller=$func[0];
            $actionName=$func[1];
            //获取当前登录管理员的权限
            $nodelist = session('nodelist');
            //对比
            if (empty($nodelist[$controller]) || !in_array($action,$nodelist[$controller])) {
                 echo '<center><p style="font-size:25px;color:red;">抱歉,您的权限不足,请联系超级管理员</center>';exit;
            }
            return $next($request);
        } else {
            return redirect('/adminlogin');
        }
        
    }
}

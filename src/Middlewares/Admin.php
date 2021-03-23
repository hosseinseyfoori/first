<?php


namespace hosseinseyfoori\first\Middlewares;


use Closure;

class Admin
{
    public function handle($request, Closure $closure, $protected=false)
    {
        if ($protected == 'protected') return redirect('/');
        return $closure($request);
    }
}

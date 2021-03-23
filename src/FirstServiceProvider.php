<?php


namespace hosseinseyfoori\first;
use hosseinseyfoori\first\First;
use hosseinseyfoori\first\Middlewares\Admin;

class FirstServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        app()->bind('first',function(){
            return new First();
        });
        $this->mergeConfigFrom(__DIR__.'/Config/app.php','cms');


    }

    public function boot()
    {


        $this->app['router']->aliasMiddleware('admin',Admin::class);

        require_once __DIR__.'/Http/route.php';
        $this->loadViewsFrom(__DIR__ . '/Views/','cms');

        $this->publishes([
            __DIR__.'/Config/app.php' => config_path('cms.php')
        ],'config');
        $this->publishes([
            __DIR__.'/Views/' => resource_path('views/cms/')
        ],'view');
    }
}

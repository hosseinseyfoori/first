<?php


namespace hosseinseyfoori\first;


use Illuminate\Support\Facades\Facade;

class FirstFecade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'first';
    }
}

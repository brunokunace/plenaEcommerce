<?php

namespace App\Common\Router;
use Illuminate\Support\Facades\Route as Facade;
/**
 * Class Router
 * @package App\Common\Router
 */
class Router extends Facade
{
    /**
     * @param string $uri
     * @param string $controller
     */
    public static function web($uri, $controller, $name)
    {
        static::get("{$uri}/create", "{$controller}@create")->name("{$name}.create");
        static::post($uri, "{$controller}@store")->name("{$name}.store");
        static::get($uri, "{$controller}@index")->name("{$name}.index");
        static::put("{$uri}/{id}", "{$controller}@update")->name("{$name}.update");
        static::delete("{$uri}/{id}", "{$controller}@destroy")->name("{$name}.destroy");
        static::get("{$uri}/{id}", "{$controller}@edit")->name("{$name}.edit");
    }
}
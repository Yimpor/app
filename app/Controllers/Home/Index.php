<?php

namespace App\Controllers\Home;

use App\Controllers\Controller;

class Index extends Controller
{
    /**
     * 路由中间件
     */
    private static $routeMiddleware = array(
        'index' => array(
            //'\Tree6bee\Cf\Foundation\Http\Middleware\VerifyCsrfToken',
        ),
    );


    /**
     * @param string $action
     *
     * @return array
     */
    public static function getMiddleware($action)
    {
        return self::$routeMiddleware[$action];
    }

    public function index()
    {
        echo 'hello cf.';
    }
}

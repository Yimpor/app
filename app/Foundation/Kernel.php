<?php

namespace App\Foundation;

use Tree6bee\Cf\Foundation\Kernel as BasicKernel;

class Kernel extends BasicKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = array(
        // '\Tree6bee\Cf\Foundation\Http\Middleware\Xhprof',
        // '\Tree6bee\Cf\Foundation\Http\Middleware\InitCookies',
        // '\Tree6bee\Cf\Foundation\Http\Middleware\StartSession',
        // '\Tree6bee\Cf\Foundation\Http\Middleware\VerifyCsrfToken',
    );
}

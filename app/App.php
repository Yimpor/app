<?php

namespace App;

use App\Foundation\Config;
use Tree6bee\Cf\Foundation\Application;
use Tree6bee\Cf\Http\Request;

class App extends Application
{
    public function __construct()
    {
        //构造config对象
        /* @var $config \Tree6bee\Cf\Contracts\Config */
        $config = new Config(__DIR__ . '/config');

        //构造异常接管对象
        $exceptionHandlerClass = '\\' . __NAMESPACE__ . '\Exceptions\Handler';
        $exceptionHandler = new $exceptionHandlerClass('', 'CtxFramework/1.1');

        //初始化app的配置类和异常接管类
        $this->init($config, $exceptionHandler);
    }

    /**
     * 运行入口
     */
    public function run()
    {
        //获取Kernel实例
        /* @var $kernel \Tree6bee\Cf\Foundation\Kernel */
        $kernelClass = '\\' . __NAMESPACE__ . '\Foundation\Kernel';
        $kernel = new $kernelClass($this);  //第二个参数自定义路由类,类型为 RouteContract

        $request = Request::capture();
        //var_dump( $request->uri->get() );

        $response = $kernel->handle($request);

        //@todo 定义 Response 类 $response->send();  //sendHeaders sendContent
        echo $response;

        //$kernel->terminate($request, $response);
    }
}

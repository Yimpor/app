<?php

namespace App;

use Tree6bee\Cf\Foundation\Application;
use Ctx\Ctx;
use Tree6bee\Cf\Http\Request;

class App extends Application
{
    public function __construct()
    {
        $appDir = __DIR__;

        //构造config对象
        /* @var $config \Tree6bee\Cf\Contracts\Config */
        $config = Ctx::getInstance()->Cf->getConfiguration($appDir . '/config');

        //构造异常接管对象
        $namespace = __NAMESPACE__;

        //如果采用composer统一处理 这里可以去掉
        new \Tree6bee\Ctx\Loader\Psr4(array(
            $namespace . '\\' => $appDir,
        ));
        $exceptionHandlerClass = '\\' . $namespace . '\Exceptions\Handler';
        $exceptionHandler = new $exceptionHandlerClass('', 'CtxFramework/1.1');

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
        $kernel = new $kernelClass($this);

        $request = Request::capture();
        //var_dump( $request->uri->get() );

        $response = $kernel->handle($request);

        //@todo 定义 Response 类 $response->send();  //sendHeaders sendContent
        echo $response;

        //$kernel->terminate($request, $response);
    }
}

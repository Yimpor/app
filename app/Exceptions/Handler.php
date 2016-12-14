<?php

namespace App\Exceptions;

use Tree6bee\Cf\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    // public function report(Exception $e, $ex = '')
    // {
    //     //@todo 待删除，完善后续流程 log 和 异常输出直接采用 new 不需要传递，所有的异常处理就在一个包里边
    //     exit( $ex . "\n" . var_export(mb_substr($e->getTraceAsString(), 0, 1000), true) );
    //     //框架类型的错误
    //     if (is_a($e, '\Tree6bee\Cf\Exceptions\Exception')) {  //cf 应用级别异常
    //         return call_user_func(array(get_class($e), 'handle'), $e);
    //     }
    //     //非框架类型错误
    //     return Response::showErrorPage(500);
    // }
}

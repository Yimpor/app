<?php

//rpc server入口文件
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
require __DIR__ . '/../ctx_base/vendor/autoload.php';

$ctx = Ctx\Ctx::getInstance();
(new Tree6bee\Ctx\Rpc\Server)->run($ctx);

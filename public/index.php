<?php

//app 入口文件
/**
 * 正式的文件组织方式如下:
 * -- /application: [ web | api | m | admin | task ] 环境入口
 *      -- /public 
 *          -- /xhprof
 *          -- index.php 
 *          -- favicon.ico
 *          -- robots.txt
 *          -- rpc.php [可选]
 *      -- /app 
 *          -- /config
 *          -- /Controllers
 *              -- /Home
 *                  -- Index.php
 *              -- Controller.php
 *          -- /Exceptions
 *              -- Handler.php
 *          -- /Foundation
 *              -- Kernel.php
 *              -- /Middleware
 *                  -- VerifyCsrfToken.php
 *
 * -- /ctx
 *      -- /Basic
 *          -- Ctx.php
 *      -- /config
 *          -- /common
 *              -- main.php
 *          -- /Ctx
 *              -- main.php
 *          -- /Cf
 *              -- main.php
 *      -- /Rpc [可选]
 *          -- User.php [模块远程接口文件]
 *      -- /Service
 *          -- /Ctx
 *              -- Config.php
 *              -- Ctx.php
 *              -- Storage.php
 *      -- /vendor
 *          -- /tree6bee
 *
 */
require __DIR__ . '/../ctx_base/vendor/autoload.php';

App\App::getInstance()->run();

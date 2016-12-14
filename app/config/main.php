<?php

/**
 * 项目级别配置
 */
return array(
    //development(开发模式), testing(调试模式), production(生产环境),maintenance(维护模式)
    'environment'       => 'development',
    'app_path'          => dirname(__DIR__),
    'storage_path'      => dirname(__DIR__) . '/storage',
    'static'            => 'http://s.sh7nestatic.com', //静态资源
    'xhprof_dir'        =>  __DIR__ . '/../../public/xhprof',
);

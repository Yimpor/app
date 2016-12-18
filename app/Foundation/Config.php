<?php

namespace App\Foundation;

use Tree6bee\Cf\Contracts\Config as ConfigContract;
use Tree6bee\Support\Ctx\Config\Config as Configuration;

class Config implements ConfigContract
{
    /**
     * @var Config
     */
    private $config;

    public function __construct($configDir)
    {
        $this->config = new Configuration($configDir);
    }

    /**
     * 框架配置获取
     * @example    get('a.b', 123)
     *
     * @param $item
     * @param mixed $default
     * @return mixed
     */
    public function get($item = '', $default = null, $file = 'main')
    {
        return $this->config->getConfig($item . '@' . $file, $default);
    }
}

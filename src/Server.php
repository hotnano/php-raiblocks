<?php

namespace HotNano\RaiBlocks;

use \Zttp\Zttp;

class Server
{
    use Action\Account,
        Action\Block,
        Action\Frontiers,
        Action\Util;

    /**
     * @var string
     */
    protected $host;

    /**
     * @var int
     */
    protected $port;

    /**
     * @var array
     */
    protected $params;

    public function __construct(string $host = '[::1]', int $port = 7076)
    {
        $this->host = $host;
        $this->port = $port;
        $this->url = "http://{$host}:{$port}";
        $this->params = [];
    }

    public function __get($key)
    {
        return $this->{$key};
    }

    public function __set($key, $val)
    {
        $this->{$key} = $val;
    }

    public function run()
    {
        return Zttp::asJson()->post($this->url, $this->params)->json();
    }
}

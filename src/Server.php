<?php

namespace HotNano\RaiBlocks;

use HotNano\RaiBlocks\Action\Account;
use HotNano\RaiBlocks\Action\Block;
use HotNano\RaiBlocks\Action\Frontiers;
use HotNano\RaiBlocks\Action\Sending;
use HotNano\RaiBlocks\Action\Util;
use HotNano\RaiBlocks\Action\Wallet;
use Zttp\Zttp;

class Server
{
    use Account, Block, Frontiers, Sending, Util, Wallet;

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

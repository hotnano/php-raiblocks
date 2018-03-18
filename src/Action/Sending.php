<?php

namespace HotNano\RaiBlocks\Action;

trait Sending
{
    public function send(string $wallet, string $source, string $destination, string $amount, ?string $id = null)
    {
        $params = [
            'action' => 'send',
            'wallet' => $wallet,
            'source' => $source,
            'destination' => $destination,
            'amount' => $amount,
        ];
        if (null !== $id) {
            $params['id'] = $id;
        }
        $this->params = $params;
        return $this;
    }
}

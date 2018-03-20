<?php

namespace HotNano\RaiBlocks\Action;

trait Sending
{
    public function send(string $wallet, string $source, string $destination, string $amount, ?string $id = null)
    {
        if (!$source) {
            throw new \RuntimeException('Invalid source.');
        }
        if (!$destination) {
            throw new \RuntimeException('Invalid destination.');
        }

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

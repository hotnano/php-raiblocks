<?php

namespace HotNano\RaiBlocks\Action;

trait Util
{
    public function mraiFromRaw(int $amount = 1)
    {
        $this->params = [
            'action' => 'mrai_from_raw',
            'amount' => $amount,
        ];
        return $this;
    }
}

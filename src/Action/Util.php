<?php

namespace HotNano\RaiBlocks\Action;

trait Util
{
    public function mraiFromRaw(string $amount)
    {
        $this->params = [
            'action' => 'mrai_from_raw',
            'amount' => $amount,
        ];
        return $this;
    }

    public function mraiToRaw(string $amount)
    {
        $this->params = [
            'action' => 'mrai_to_raw',
            'amount' => $amount,
        ];
        return $this;
    }

    public function kraiFromRaw(string $amount)
    {
        $this->params = [
            'action' => 'krai_from_raw',
            'amount' => $amount,
        ];
        return $this;
    }

    public function kraiToRaw(string $amount)
    {
        $this->params = [
            'action' => 'krai_to_raw',
            'amount' => $amount,
        ];
        return $this;
    }

    public function raiFromRaw(string $amount)
    {
        $this->params = [
            'action' => 'rai_from_raw',
            'amount' => $amount,
        ];
        return $this;
    }

    public function raiToRaw(string $amount)
    {
        $this->params = [
            'action' => 'rai_to_raw',
            'amount' => $amount,
        ];
        return $this;
    }
}

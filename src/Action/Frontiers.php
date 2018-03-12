<?php

namespace HotNano\RaiBlocks\Action;

trait Frontiers
{
    public function frontiers(?string $account = null, int $count = 1)
    {
        $this->params = [
            'action' => 'frontiers',
            'account' => $account,
            'count' => $count,
        ];
        return $this;
    }

    public function frontierCount()
    {
        $this->params = [
            'action' => 'frontier_count',
        ];
        return $this;
    }
}

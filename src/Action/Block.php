<?php

namespace HotNano\RaiBlocks\Action;

trait Block
{
    public function availableSupply()
    {
        $this->params = [
            'action' => 'available_supply',
        ];
        return $this;
    }

    public function block(string $hash = null)
    {
        $this->params = [
            'action' => 'block',
            'hash' => $hash,
        ];
        return $this;
    }

    public function blocks(array $hashes = [])
    {
        $this->params = [
            'action' => 'blocks',
            'hashes' => $hashes,
        ];
        return $this;
    }

    public function blocksInfo(array $hashes = [], bool $pending = false, bool $source = false)
    {
        $this->params = [
            'action' => 'blocks_info',
            'hashes' => $hashes,
            'pending' => $pending,
            'source' => $source,
        ];
        return $this;
    }

    public function blockAccount(?string $hash = null)
    {
        $this->params = [
            'action' => 'block_account',
            'hash' => $hash,
        ];
        return $this;
    }

    public function blockCount()
    {
        $this->params = [
            'action' => 'block_count',
        ];
        return $this;
    }

    public function blockCountType()
    {
        $this->params = [
            'action' => 'block_count_type',
        ];
        return $this;
    }

    public function chain(?string $block = null, int $count = 1)
    {
        $this->params = [
            'action' => 'chain',
            'block' => $block,
            'count' => $count,
        ];
        return $this;
    }

    public function delegators(string $account)
    {
        $this->params = [
            'action' => 'delegators',
            'account' => $account,
        ];
        return $this;
    }

    public function delegatorsCount(string $account)
    {
        $this->params = [
            'action' => 'delegators_count',
            'account' => $account,
        ];
        return $this;
    }

    public function deterministicKey(?string $seed = null, int $index = 0)
    {
        $this->params = [
            'action' => 'deterministic_key',
            'seed' => $seed,
            'index' => $index,
        ];
        return $this;
    }

    public function history(?string $hash = null,int $count = 1)
    {
        $this->params = [
            'action' => 'history',
            'hash' => $hash,
            'count' => $count,
        ];
        return $this;
    }
}

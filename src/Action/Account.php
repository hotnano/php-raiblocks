<?php

namespace HotNano\RaiBlocks\Action;

trait Account
{
    public function accountBalance(?string $account = null)
    {
        $this->params = [
            'action' => 'account_balance',
            'account' => $account,
        ];
        return $this;
    }

    public function accountBlockCount(?string $account = null)
    {
        $this->params = [
            'action' => 'account_block_count',
            'account' => $account,
        ];
        return $this;
    }

    public function accountInfo(
        ?string $account = null,
        bool $representative = false,
        bool $weight = false,
        bool $pending = false
    ) {
        $this->params = [
            'action' => 'account_info',
            'account' => $account,
            'representative' => $representative,
            'weight' => $weight,
            'pending' => $pending,
        ];
        return $this;
    }

    public function accountCreate(?string $wallet = null,bool $work = true)
    {
    }

    public function accountGet(?string $key = null)
    {
        $this->params = [
            'action' => 'account_get',
            'key' => $key,
        ];
        return $this;
    }

    public function accountHistory(?string $account = null, int $count = 1)
    {
        $this->params = [
            'action' => 'account_history',
            'account' => $account,
            'count' => $count,
        ];
        return $this;
    }

    public function accountList(?string $wallet = null)
    {
        $this->params = [
            'action' => 'account_list',
            'wallet' => $wallet,
        ];
        return $this;
    }

    public function accountMove(?string $wallet = null, ?string $source = null, array $accounts = [])
    {
    }

    public function accountKey($account)
    {
        $this->params = [
            'action' => 'account_key',
            'account' => $account,
        ];
        return $this;
    }

    public function accountRemove(?string $wallet = null, ?string $account = null)
    {
    }

    public function accountRepresentative(?string $account = null)
    {
        $this->params = [
            'action' => 'account_representative',
            'account' => $account,
        ];
        return $this;
    }

    public function accountRepresentativeSet()
    {
    }

    public function accountWeight(string $account)
    {
        $this->params = [
            'action' => 'account_weight',
            'account' => $account,
        ];
        return $this;
    }
}

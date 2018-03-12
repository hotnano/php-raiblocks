<?php

namespace HotNano\RaiBlocks\Action;

trait Wallet
{
    public function walletAccountsBalances(string $wallet)
    {
        $this->params = [
            'action' => 'wallet_balances',
            'wallet' => $wallet,
        ];
        return $this;
    }

    public function walletAddKey(string $wallet, string $key, bool $work = false)
    {
        $this->params = [
            'action' => 'wallet_add',
            'wallet' => $wallet,
            'key' => $key,
            'work' => $work,
        ];
        return $this;
    }

    public function walletChangePassword(string $wallet, string $password)
    {
        $this->params = [
            'action' => 'password_change',
            'wallet' => $wallet,
            'password' => $password,
        ];
        return $this;
    }

    public function walletChangeSeed(string $wallet, string $seed)
    {
        $this->params = [
            'action' => 'wallet_change_seed',
            'wallet' => $wallet,
            'seed' => $seed,
        ];
        return $this;
    }

    public function walletContains(string $wallet, string $account)
    {
        $this->params = [
            'action' => 'wallet_contains',
            'wallet' => $wallet,
            'account' => $account,
        ];
        return $this;
    }

    public function walletCreate()
    {
        $this->params = [
            'action' => 'wallet_create',
        ];
        return $this;
    }

    public function walletDestroy(string $wallet)
    {
        $this->params = [
            'action' => 'wallet_destroy',
            'wallet' => $wallet,
        ];
        return $this;
    }

    public function walletExport(string $wallet)
    {
        $this->params = [
            'action' => 'wallet_export',
            'wallet' => $wallet,
        ];
        return $this;
    }

    public function walletFrontiers(string $wallet)
    {
        $this->params = [
            'action' => 'wallet_frontiers',
            'wallet' => $wallet,
        ];
        return $this;
    }

    public function walletLocked(string $wallet)
    {
        $this->params = [
            'action' => 'wallet_locked',
            'wallet' => $wallet,
        ];
        return $this;
    }

    public function walletPasswordEnter(string $wallet, string $password)
    {
        $this->params = [
            'action' => 'password_enter',
            'wallet' => $wallet,
            'password' => $password,
        ];
        return $this;
    }

    public function walletPending(string $wallet, int $count = 1)
    {
        $this->params = [
            'action' => 'wallet_pending',
            'wallet' => $wallet,
            'count' => $count,
        ];
        return $this;
    }

    public function walletRepresentativeSet(string $wallet, string $representative)
    {
        $this->params = [
            'action' => 'wallet_representative_set',
            'wallet' => $wallet,
            'representative' => $representative,
        ];
        return $this;
    }

    public function walletRepresentative(string $wallet)
    {
        $this->params = [
            'action' => 'wallet_representative',
            'wallet' => $wallet,
        ];
        return $this;
    }

    public function walletRepublish(string $wallet, int $count = 1)
    {
        $this->params = [
            'action' => 'wallet_republish',
            'wallet' => $wallet,
            'count' => $count,
        ];
        return $this;
    }

    public function walletTotalBalance(string $wallet)
    {
        $this->params = [
            'action' => 'wallet_balance_total',
            'wallet' => $wallet,
        ];
        return $this;
    }

    public function walletValidPassword(string $wallet)
    {
        $this->params = [
            'action' => 'password_valid',
            'wallet' => $wallet,
        ];
        return $this;
    }

    public function walletWorkGet(string $wallet)
    {
        $this->params = [
            'action' => 'wallet_work_get',
            'wallet' => $wallet,
        ];
        return $this;
    }
}
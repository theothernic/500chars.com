<?php
    namespace App\Services;

    use App\Models\Account;

    class AccountService
    {
        public function getAccountByKey(string $key = '')
        {
            return Account::where('key', $key)->first();
        }
    }

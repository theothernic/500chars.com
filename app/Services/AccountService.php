<?php
    namespace App\Services;

    use App\Models\Account\Account;
    use Illuminate\Support\Collection;

    class AccountService
    {
        public function getAccountByKey(string $key = '')
        {
            return Account::where('key', $key)->first();
        }

        public function getForUserId(string $userId = ''): Collection|array
        {
            return Account::where('user_id', $userId)->get();
        }
    }

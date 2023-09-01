<?php
    namespace App\Http\Controllers\Account;

    use App\Traits\Controllers\HttpController;
    use App\Traits\Controllers\ViewController;

    class ProfileController
    {
        use ViewController, HttpController;

        public function __invoke(string $account = '')
        {
            if (empty($account))
                $this->handleNotFoundError(__METHOD__);

            return $this->respondWithView('account.profile');
        }
    }

<?php
    namespace App\Http\Controllers\User;

    use App\Services\AccountService;
    use App\Traits\Controllers\ViewController;
    use App\View\Models\Account\Account;
    use App\View\Models\User\Dashboard;
    use Illuminate\Support\Collection;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Redirect;

    class DashboardController
    {
        use ViewController;

        public function __construct(
            private readonly AccountService $accountService
        ) {}

        public function __invoke()
        {
            $accounts = $this->getUserAccounts();

            if (empty($accounts))
                return Redirect::route('accounts.create');

            $page = new Dashboard([
                'accounts' => $accounts
            ]);

            return $this->respondWithView('user.dashboard', $page);
        }

        public function getUserAccounts(): array
        {
            $records = [];

            $data = $this->accountService->getForUserId(Auth::user()->id);

            foreach($data as $a)
                $records[] = $a->asDto();


            return $records;
        }
    }

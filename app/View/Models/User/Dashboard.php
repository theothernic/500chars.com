<?php
    namespace App\View\Models\User;

    use Illuminate\Support\Collection;
    use Theothernic\Datamodels\View\PageViewModel;

    class Dashboard extends PageViewModel
    {

        public string $title = '';

        public function __construct(mixed $data)
        {
            parent::__construct($data);

            $this->title = __('user.dashboard.title');
        }

        public array|Collection $accounts = [];
    }

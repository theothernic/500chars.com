<?php
    namespace App\View\Models\Account;

    use Theothernic\Datamodels\View\ViewModel;

    class Account extends ViewModel
    {
        public string $id;
        public string $name;
        public string $location;
        public string $description;
        public string $website;
    }

<?php
    namespace App\View\Models\Account;

    use Theothernic\Datamodels\View\ViewModel;

    class Profile extends ViewModel
    {
        public string $key = '';
        public string $name = '';
        public string $location = '';
        public string $description = '';
        public string $website = '';

        public array $posts = [];

    }

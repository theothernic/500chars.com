<?php
    namespace App\Http\Controllers\Account;


    use App\Traits\Controllers\ViewController;

    class AccountResourceController
    {
        use ViewController;
        public function index() {
            return $this->respondWithView('account.index');
        }
        public function show() {
            return $this->respondWithView('account.show');
        }
        public function edit() {
            return $this->respondWithView('account.edit');
        }

        public function create() {
            return $this->respondWithView('account.create');
        }

        public function destroy() {}

        public function store() {}

        public function update() {}
    }

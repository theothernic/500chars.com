<?php
    namespace App\Traits\Controllers;

    use App\View\Models\ViewModel;
    use Illuminate\View\View;

    trait ViewController
    {
        public function respondWithView(string $view, ViewModel $data): View
        {
            return view($view, compact('data'));
        }
    }

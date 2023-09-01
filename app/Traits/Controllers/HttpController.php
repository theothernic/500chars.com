<?php
    namespace App\Traits\Controllers;

    use Illuminate\Support\Facades\Log;

    trait HttpController {

        public function handleNotFoundError(string $f = '')
        {
            $msg = sprintf('Resource not found at %s', $f);
            Log::error($msg);
            abort(404, $msg);
        }
    }

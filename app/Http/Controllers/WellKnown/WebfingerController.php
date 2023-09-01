<?php
    namespace App\Http\Controllers\WellKnown;

    use App\Traits\Controllers\JsonController;

    class WebfingerController
    {
        use JsonController;

        public function __invoke()
        {
            return $this->respondWithJson([], 404);
        }


    }

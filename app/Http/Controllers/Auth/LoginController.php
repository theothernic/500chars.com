<?php
    namespace App\Http\Controllers\Auth;

    use App\Services\AuthService;
    use App\Traits\Controllers\ViewController;
    use App\View\Models\Auth\Login;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Redirect;
    use Illuminate\Support\Facades\Session;

    class LoginController
    {
        use ViewController;

        public function __construct(
            private readonly AuthService $authService
        ) { }

        public function __invoke()
        {

            $page = new Login([
                'message' => Session::get('message') ?? []
            ]);
            return $this->respondWithView('auth.login', $page);
        }

        public function handle(Request $request)
        {
            $credentials = $request->only('email', 'password');

            if (!$this->authService->attempt($credentials))
                return Redirect::back()->with('message', ['type' => 'error', 'text' => __('auth.failed')]);

            return Redirect::route('dashboard');
        }
    }

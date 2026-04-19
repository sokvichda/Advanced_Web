protected $routeMiddleware = [
    'auth' => \App\Http\Middleware\Authenticate::class,
    'check.login' => \App\Http\Middleware\CheckLogin::class,
];
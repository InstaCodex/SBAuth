<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-primary d-flex flex-column" style="min-height: 100vh;">
    <div class="container py-4 d-flex flex-column flex-grow-1">
        <!-- Header -->
        <header class="d-flex align-items-center justify-content-between flex-wrap py-3 mb-4">
            <div class="d-flex align-items-center">
                <div class="sidebar-brand-icon rotate-n-15 text-white mr-2">
                    <i class="fas fa-laugh-wink fa-lg"></i>
                </div>
                <span class="h5 mb-0 font-weight-bold text-white">{{ config('app.name', 'Laravel') }}</span>
            </div>

            @if (Route::has('login'))
                <nav class="d-flex align-items-center">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-light btn-sm">
                            <i class="fas fa-tachometer-alt fa-fw mr-1"></i>{{ __('Dashboard') }}
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-light btn-sm">
                            {{ __('Log in') }}
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary btn-sm ml-2">
                                {{ __('Register') }}
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <!-- Main Content -->
        <main class="my-5 flex-grow-1">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="badge badge-light text-primary mb-3 px-3 py-2 text-uppercase small">
                        {{ __('Authentication Starter') }}
                    </span>
                    <h1 class="h3 font-weight-bold text-white mb-3">
                        {{ __('Modern SBAuth with Laravel & Bootstrap') }}
                    </h1>
                    <p class="text-white-50 mb-4" style="font-size: 1rem;">
                        {{ __('A clean starting point for building secure, modern applications with Laravel authentication and a Bootstrap-based UI that is easy to customize.') }}
                    </p>

                    <div class="d-flex flex-wrap align-items-center mb-4">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-light btn-lg px-4">
                                    <i class="fas fa-arrow-right fa-fw mr-1"></i>{{ __('Go to Dashboard') }}
                                </a>
                            @else
                                <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4">
                                    {{ __('Get Started') }}
                                </a>
                                <a href="{{ route('login') }}" class="btn btn-light btn-lg px-4 ml-2">
                                    {{ __('Sign in') }}
                                </a>
                            @endauth
                        @endif
                    </div>
                    
                    <div class="row text-white-50 small">
                        <div class="col-12 col-sm-6 d-flex mb-3">
                            <span class="text-success mr-2"><i class="fas fa-check-circle"></i></span>
                            <div>
                                <div class="font-weight-bold text-white">{{ __('Ready-to-use auth views') }}</div>
                                <div>{{ __('Login, register, reset password, and profile screens styled with Bootstrap.') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 d-flex mb-3">
                            <span class="text-success mr-2"><i class="fas fa-check-circle"></i></span>
                            <div>
                                <div class="font-weight-bold text-white">{{ __('Built on Laravel') }}</div>
                                <div>{{ __('Leverage the full Laravel ecosystem, from routing to queues and more.') }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-4 p-md-5">
                            <h2 class="h5 font-weight-bold text-primary mb-4">
                                <i class="fas fa-link fa-fw mr-1"></i>{{ __('Quick links') }}
                            </h2>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center mb-3">
                                    <span class="badge badge-primary mr-2">1</span>
                                    <a href="https://laravel.com/docs" target="_blank" class="text-primary">
                                        {{ __('Read the Laravel documentation') }}
                                    </a>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <span class="badge badge-primary mr-2">2</span>
                                    <a href="https://laracasts.com" target="_blank" class="text-primary">
                                        {{ __('Watch tutorials on Laracasts') }}
                                    </a>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <span class="badge badge-primary mr-2">3</span>
                                    <a href="https://github.com/laravel/laravel" target="_blank" class="text-primary">
                                        {{ __('Explore the Laravel skeleton on GitHub') }}
                                    </a>
                                </li>
                            </ul>
                            <div class="border-top pt-3 mt-3 small text-secondary">
                                {{ __('You can freely customize this landing page inside') }}
                                <code class="text-primary">resources/views/welcome.blade.php</code>.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="text-center py-4 mt-auto">
            <span class="text-white-50 small">&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. {{ __('Powered by Laravel & Bootstrap') }}</span>
        </footer>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
</body>
</html>

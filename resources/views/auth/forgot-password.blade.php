<x-layouts.guest-sb-admin>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                    <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                                </div>

                                <!-- Session Status -->
                                <x-auth-session-status class="mb-3" :status="session('status')" />

                                <form method="POST" action="{{ route('password.email') }}" class="user">
                                    @csrf

                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email"
                                            name="email" value="{{ old('email') }}" required autofocus
                                            aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Reset Password
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    @if (Route::has('register'))
                                        <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                    @endif
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-layouts.guest-sb-admin>

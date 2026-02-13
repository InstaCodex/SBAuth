<x-layouts.guest-sb-admin>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">{{ __('Verify Your Email') }}</h1>
                                    <p class="mb-4">{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</p>
                                </div>

                                @if (session('status') == 'verification-link-sent')
                                    <div class="mb-3 font-weight-bold small text-success">
                                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                    </div>
                                @endif

                                <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between gap-3">
                                    <form method="POST" action="{{ route('verification.send') }}" class="mb-0">
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-user">
                                            {{ __('Resend Verification Email') }}
                                        </button>
                                    </form>
                                    <form method="POST" action="{{ route('logout') }}" class="mb-0">
                                        @csrf
                                        <button type="submit" class="btn btn-secondary btn-user">
                                            {{ __('Log Out') }}
                                        </button>
                                    </form>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">{{ __('Back to Login') }}</a>
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

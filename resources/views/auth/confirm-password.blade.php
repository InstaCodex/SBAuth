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
                                    <h1 class="h4 text-gray-900 mb-2">{{ __('Confirm Password') }}</h1>
                                    <p class="mb-4">{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</p>
                                </div>

                                <form method="POST" action="{{ route('password.confirm') }}" class="user">
                                    @csrf

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password"
                                            name="password" required autocomplete="current-password"
                                            placeholder="{{ __('Password') }}">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Confirm') }}
                                    </button>
                                </form>
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

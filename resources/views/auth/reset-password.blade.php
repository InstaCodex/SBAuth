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
                                    <h1 class="h4 text-gray-900 mb-4">{{ __('Reset Password') }}</h1>
                                </div>

                                <form method="POST" action="{{ route('password.store') }}" class="user">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email" name="email"
                                            value="{{ old('email', $request->email) }}" required autofocus autocomplete="username"
                                            placeholder="{{ __('Email Address') }}">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password"
                                            required autocomplete="new-password" placeholder="{{ __('Password') }}">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password_confirmation"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="{{ __('Confirm Password') }}">
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Reset Password') }}
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

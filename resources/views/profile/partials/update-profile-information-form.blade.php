<section>
    <p class="text-muted small mb-4">
        {{ __("Update your account's profile information and email address.") }}
    </p>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="user">
        @csrf
        @method('patch')

        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="name" name="name"
                value="{{ old('name', $user->name) }}" required autofocus autocomplete="name"
                placeholder="{{ __('Name') }}">
            <x-input-error class="mt-2 text-danger" :messages="$errors->get('name')" />
        </div>

        <div class="form-group">
            <input type="email" class="form-control form-control-user" id="email" name="email"
                value="{{ old('email', $user->email) }}" required autocomplete="username"
                placeholder="{{ __('Email Address') }}">
            <x-input-error class="mt-2 text-danger" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-2">
                    <p class="small text-dark mb-0">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification" type="submit" class="btn btn-link p-0 align-baseline small">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>
                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 fw-medium small text-success mb-0">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="d-flex align-items-center">
            <button type="submit" class="btn btn-primary btn-user px-4 mr-3" style="min-width: 140px;">
                {{ __('Save') }}
            </button>
            @if (session('status') === 'profile-updated')
                <span class="small text-success">{{ __('Saved.') }}</span>
            @endif
        </div>
    </form>
</section>

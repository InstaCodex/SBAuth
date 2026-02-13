<section>
    <p class="text-muted small mb-4">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </p>

    <form method="post" action="{{ route('password.update') }}" class="user">
        @csrf
        @method('put')

        <div class="form-group">
            <input type="password" class="form-control form-control-user" id="update_password_current_password"
                name="current_password" autocomplete="current-password"
                placeholder="{{ __('Current Password') }}">
            <x-input-error class="mt-2 text-danger" :messages="$errors->updatePassword->get('current_password')" />
        </div>

        <div class="form-group">
            <input type="password" class="form-control form-control-user" id="update_password_password"
                name="password" autocomplete="new-password"
                placeholder="{{ __('New Password') }}">
            <x-input-error class="mt-2 text-danger" :messages="$errors->updatePassword->get('password')" />
        </div>

        <div class="form-group">
            <input type="password" class="form-control form-control-user" id="update_password_password_confirmation"
                name="password_confirmation" autocomplete="new-password"
                placeholder="{{ __('Confirm Password') }}">
            <x-input-error class="mt-2 text-danger" :messages="$errors->updatePassword->get('password_confirmation')" />
        </div>

        <div class="d-flex align-items-center gap-3">
        <button type="submit" class="btn btn-primary btn-user px-4" style="min-width: 140px;">
                {{ __('Save') }}
            </button>
            @if (session('status') === 'password-updated')
                <span class="small text-success">{{ __('Saved.') }}</span>
            @endif
        </div>
    </form>
</section>

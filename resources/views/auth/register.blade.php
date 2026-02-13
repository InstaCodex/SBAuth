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
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>

                                <form method="POST" action="{{ route('register') }}" class="user">
                                    @csrf

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="name"
                                            name="name" value="{{ old('name') }}" required autofocus
                                            autocomplete="name" placeholder="Name">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email"
                                            name="email" value="{{ old('email') }}" required
                                            autocomplete="username" placeholder="Email Address">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" required
                                                autocomplete="new-password" placeholder="Password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                id="password_confirmation" name="password_confirmation" required
                                                autocomplete="new-password" placeholder="Repeat Password">
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    @if (Route::has('password.request'))
                                        <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
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

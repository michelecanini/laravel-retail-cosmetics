<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

        <main class="login-form mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">{{ __('Accedi') }}</div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
        
                                    <!-- Email Address -->
                                    <div class="form-group row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                        <div class="col-md-6">
                                            <input type="email" id="email" class="form-control" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>
        
                                    <!-- Password -->
                                    <div class="form-group row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                        <div class="col-md-6">
                                            <input type="password" id="password" class="form-control" name="password" required autocomplete="current-password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>
        
                                    <!-- Remember Me -->
                                    <div class="form-group row mb-3">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input id="remember_me" type="checkbox" name="remember"> {{ __('Ricordami') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-md-6 offset-md-4 mb-3">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                {{ __('Hai dimenticato la tua password?') }}
                                            </a>
                                        @endif
        
                                        <x-primary-button class="ms-5 mt-3 bg-primary">
                                            {{ __('Accedi') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

</x-guest-layout>


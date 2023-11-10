<x-guest-layout>
    <main class="login-form mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">{{ __('Registrati') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
    
                                <!-- Name -->
                                <div class="form-group row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                </div>
    
                                <!-- Email Address -->
                                <div class="form-group row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>
    
                                <!-- Password -->
                                <div class="form-group row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                    <div class="col-md-6">
                                        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
    
                                <!-- Confirm Password -->
                                <div class="form-group row mb-3">
                                    <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">{{ __('Conferma Password') }}</label>
                                    <div class="col-md-6">
                                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>
    
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
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Sei già registrato?') }}
                                    </a>
    
                                    <x-primary-button class="ms-5 mt-3 bg-primary">
                                        {{ __('Registrati') }}
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

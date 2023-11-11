<div id="app">
    <app-header></app-header>
</div>

<x-guest-layout>
    <main class="login-form mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">{{ __('Hai dimenticato la tua password? Nessun problema. Forniscici solo il tuo indirizzo email e ti invieremo un link per reimpostare la password che ti permetterà di sceglierne una nuova.') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
    
                                <!-- Email Address -->
                                <div class="form-group row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                    <div class="col-md-6">
                                        <input type="email" id="email" class="form-control" name="email" :value="old('email')" required autofocus />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>
    
                                <div class="col-md-6 offset-md-4 mb-3">
                                    <x-primary-button class="bg-primary">
                                        {{ __('Richiedi il Link per reimpostare la password') }}
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

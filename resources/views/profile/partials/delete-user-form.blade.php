<section class="space-y-6 col-md-6 mx-auto border p-3">
    <header>
        <h2 class="text-lg font-medium text-secondary">
            {{ __('Eliminare l’Account') }}
        </h2>

        <p class="mt-1 text-sm text-secondary">
            {{ __('Una volta che il tuo account è stato eliminato, tutte le sue risorse e dati verranno cancellati definitivamente. Prima di eliminare il tuo account, scarica qualsiasi dato o informazione che desideri conservare.') }}
        </p>
    </header>

    <!-- Modal trigger button -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-account">
        {{__('Cancella Account')}}
    </button>

    <!-- Modal Body -->
    <div class="modal fade" id="delete-account" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="delete-account" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete-account">{{ __('Sei sicuro di voler eliminare il tuo account?') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                        @csrf
                        @method('delete')

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Una volta che il tuo account è stato eliminato, tutte le sue risorse e dati verranno cancellati definitivamente. Inserisci la tua password per confermare che desideri eliminare definitivamente il tuo account.') }}
                        </p>

                        <div class="mt-6">
                            <label for="password" class="sr-only">{{ __('Password') }}</label>

                            <input
                                id="password"
                                name="password"
                                type="password"
                                class="mt-1 block w-3/4 form-control"
                                placeholder="{{ __('Password') }}"
                            />

                            @error('password')
                            <span class="invalid-feedback mt-2" role="alert">
                                <strong>{{ $errors->userDeletion->get('password') }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mt-6 flex justify-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                {{ __('Annulla') }}
                            </button>

                            <button type="submit" class="btn btn-danger ml-3">
                                {{ __('Eliminare l’Account') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


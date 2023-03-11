<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                        <div class="valid-feedback">
                        Ottimo!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Cognome</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                        Ottimo!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustomDate" class="form-label">Data</label>
                        <input type="date" class="form-control" id="validationCustomDate" value="" required>
                        <div class="valid-feedback">
                        Ottimo!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label">E-mail</label>
                        <div class="input-group has-validation">
                        <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Inserisci un e-mail.
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Provincia</label>
                        <select class="form-select" id="validationCustom03" required>
                            <option selected disabled value="">Scegli...</option>
                        </select>
                        <div class="invalid-feedback">
                            Inserisci una provincia.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustomCity" class="form-label">Comune</label>
                        <select class="form-select" id="validationCustomCity" required>
                            <option selected disabled value="">Scegli...</option>
                        </select>
                        <div class="invalid-feedback">
                            Inserisci un comune.
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom05" class="form-label">Richiesta</label>
                        <div class="input-group">
                        <textarea class="form-control" aria-label="With textarea" id="validationCustom05" required></textarea>
                        </div>
                        <div class="invalid-feedback">
                        Inserisci una richiesta.
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
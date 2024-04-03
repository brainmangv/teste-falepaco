<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="container">
        <div class="row">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" class="logo" alt="logo">
        </div>
        <div class="row">
            <div class="col-md-4  myForm">
                <div class="login-form bg-light mt-4 p-4">
                    <form method="POST" action="{{ route('login') }}" class="row g-3">
                        @csrf
                        <h4 class="text-center">Bem vindo</h4>
                        <div class="col-12">
                            <label>Usuário</label>
                            <input type="text" name="email" class="form-control" placeholder="Informe o nome do usuário" :value="old('email')" required>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="col-12">
                            <label>Senha</label>
                            <input type="password" name="password" class="form-control" placeholder="Informe a senha" required autocomplete="current-password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe"> Lembrar Senha</label>
                            </div>
                        </div>
                       
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark float-end">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</x-guest-layout>

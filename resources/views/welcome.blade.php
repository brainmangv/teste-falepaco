<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
         @vite('resources/css/app.css')
    </head>
    <body>
    <div class="container">
        
        <div class="row">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" class="logo" alt="logo">
        </div>
        <div class="row">
            <div class="col-md-4  myForm d-none">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="" method="" class="row g-3">
                        <h4 class="text-center">Bem vindo</h4>
                        <div class="col-12">
                            <label>Usuário</label>
                            <input type="text" name="username" class="form-control" placeholder="Informe o nome do usuário">
                        </div>
                        <div class="col-12">
                            <label>Senha</label>
                            <input type="password" name="password" class="form-control" placeholder="Informe a senha">
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
    @vite('resources/js/app.js')
    </body>
</html>

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
            <img src="{{ Vite::asset('resources/images/logo.png') }}" class="logo-home" alt="logo">
        </div>
        <div class="row">
            <div class="col-md-4  m-auto text-center">
                <h4 class="mb-4">Bem vindo ao teste do falepaco, clique abaixo para fazer o login.</h4>
                <a class="btn btn-primary" href=/login>Login</a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
    </body>
</html>

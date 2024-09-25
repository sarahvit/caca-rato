<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles

</head>

<body>
    @livewireScripts
    <div class="container">
        <!-- cria um form -->
        <div class="form_container">
            <h1>Login</h1>
            <!-- form submetido via POST para a rota de login -->
            <form method="POST" action="{{route('dashboard')}}">
                <div class="inside_container">
                    <!-- Este é um helper do Laravel Blade que insere um token CSRF (Cross-Site Request Forgery) em formulários para garantir que as requisições POST sejam seguras. -->
                    @csrf
                    <!-- cria u  input do tipo text e o placeholder deixa uma mensagem temporanea -->
                    <input type="text" placeholder="username" />
                    <!-- o tipo password garante que o texto digitado seja ocultado -->
                    <input type="password" placeholder="password" />
                    <button type="submit" class="botao"><a href="/dashboard">create</a></button>
                    
                </div>
                <p class="message">Not registred? <a href="/">Cria uma conta ae mano</a></p>
            </form>
        </div>
    </div>
</body>

</html>
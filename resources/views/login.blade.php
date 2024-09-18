<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    
</head>

<body>
    <div class="login-page">
        <!-- cria um form -->
        <div class="form">
            <!-- form submetido via POST para a rota de login -->
            <form method="POST" action="{{route('login')}}">
                <!-- Este é um helper do Laravel Blade que insere um token CSRF (Cross-Site Request Forgery) em formulários para garantir que as requisições POST sejam seguras. -->
                @csrf
                <!-- cria u  input do tipo text e o placeholder deixa uma mensagem temporanea -->
                <input type="text" placeholder="username" />
                <!-- o tipo password garante que o texto digitado seja ocultado -->
                <input type="password" placeholder="password" />
                <a href="/dashboard"> <input type="button" value="vambora"></a>
                <p class="message">Not registred? <a href="/">Cria uma conta ae mano</a></p>
            </form>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div class="register-page">
        <!-- cria um form -->
        <div class="form">
            <!-- form submetido via POST para a rota de registro -->
            <form method="POST" action="{{route('register')}}">

                <!-- Este é um helper do Laravel Blade que insere um token CSRF (Cross-Site Request Forgery) em formulários para garantir que as requisições POST sejam seguras. -->
                @csrf
                <!-- cria u  input do tipo text e o placeholder deixa uma mensagem temporanea -->
                <input type="text" placeholder="name" />
                <!-- o tipo password garante que o texto digitado seja ocultado -->
                <input type="password" placeholder="password" />
                <input type="email" placeholder="email address" />
                <button>create</button>
                <p class="message">Already registered? <a href="/login">Sign In</a></p>
            </form>
        </div>
    </div>
</body>

</html>
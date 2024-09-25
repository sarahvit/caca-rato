<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles

</head>

<body>
    @livewireScripts

    <!-- cria um form -->
    <div class="container">
        <div class="form_container">
            <!-- form submetido via POST para a rota de registro -->
            <h1>REGISTER</h1>
            <form method="POST" action="{{route('users.store')}}">
                <div class="inside_container">
                <!-- Este é um helper do Laravel Blade que insere um token CSRF (Cross-Site Request Forgery) em formulários para garantir que as requisições POST sejam seguras. -->
                @csrf
    
                <!-- cria u  input do tipo text e o placeholder deixa uma mensagem temporanea -->
                <input type="text" name="name" placeholder="name" />
                <!-- o tipo password garante que o texto digitado seja ocultado -->
                <input type="email" name="email" placeholder="email address" />
                <input type="password" name="password" placeholder="password" />
                
                <button type="submit" class="botao"><a  href="{{url('/dashboard')}}">create</a></button>
        
                </div>
                <p class="message">Already registered? <a href="{{ url ('/login')}}">Sign In</a></p>   
                
            </form>
    
        </div>
    </div>

</body>

</html>
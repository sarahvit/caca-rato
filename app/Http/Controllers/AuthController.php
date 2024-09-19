<?php

//use app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;
//Importa a classe Request do Laravel, que é usada para lidar com requisições HTTP, como dados de formulário ou parâmetros de URL.
use Illuminate\Http\Request;

class AuthController extends Controller
{ //Define o controlador AuthController, que herda da classe base Controller do Laravel. Essa herança fornece vários métodos úteis para controle de fluxo.

    public function showRegisterForm()
    {
        // Retorna a view de registro
        return view('register');
    }
    public function showLoginForm()
    {
        // Retorna a view de login
        return view('login');
    }

    public function showDashboard()
    {
        // Retorna a view de dashboard
        return view('dashboard');
    }
}
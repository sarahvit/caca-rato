<?php

//use app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;
//Importa a classe Request do Laravel, que é usada para lidar com requisições HTTP, como dados de formulário ou parâmetros de URL.
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{ //Define o controlador AuthController, que herda da classe base Controller do Laravel. Essa herança fornece vários métodos úteis para controle de fluxo.

    public function showRegisterForm()
    {

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

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email'),
            ],
            'password' => 'required|max:255'

        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('dashboard')->with('sucess', 'Usuário registrado com sucesso!');

    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ]);
    }

    


}
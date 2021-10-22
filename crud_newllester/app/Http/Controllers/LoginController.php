<?php 
//Criado por Ronald Tadeu Alves Pinto Filho
//Email: ronaldtadeufilho@htomail.com

 namespace App\Http\Controllers;
 use App\Http\Controllers\Controller;
 use App\Models\LoginModel;
 use Illuminate\Http\Request;
 use Illuminate\Http\Response;
 use Session;

class LoginController extends Controller {
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $dados = $request->post(); //pega os dados do Form via post

        //chama o model e salva os dados no bd
        $user = new LoginModel;
        $user->create($dados);
        $id = $user->latest('created_at')->first();
        Session::put('login', $id);
        $login = Session::get('login');
        
        if(Session::has('login')){
            Session::save();
            return redirect('/')->with('message', 'Usuario Criado e Logado Com Sucesso!');
        }else{
            return redirect('/login')->with('message', 'Erro ao logar!');
        }
    }

    public function logar(Request $request)
    {
        $dados = $request->post(); //pega os dados do Form via post

        //chama o model e procura o user informado
        $user = new LoginModel;
        $query = "email = ".$dados['email']."and senha =".$dados['senha'];
        $user = LoginModel::whereRaw($query)->get();
        
        if(Session::put('login', $$user)){
            return redirect('/')->with('message', 'Usuario Logado Com Sucesso!');
        }else{
            return redirect('/login')->with('message', 'Erro ao Logar!');
        }
    }
}
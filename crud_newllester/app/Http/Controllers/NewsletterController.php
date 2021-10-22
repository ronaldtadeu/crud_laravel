<?php 
//Criado por Ronald Tadeu Alves Pinto Filho
//Email: ronaldtadeufilho@htomail.com

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\NewsletterModel;
use Illuminate\Http\Request;
use Redirect;
use Session;

class NewsletterController extends Controller {

    //Verifica se o usuario esta logado
    public function __construct()
    {
        $login = Session::all(); 

        if(!Session::has('login')){
            Redirect::to('login')->send();
        }
    }

    //Pagina principal do sistema
    public function index()
    {   
        //pega todos os registros da tabela e envia para view
        $data = NewsletterModel::all();

        return view('lista_news', ['registros' => $data]);
    }

    //Função que abre a tela de cadastro
    public function cadastro()
    {
        return view('cad_news');
    }

    //Função que Salva os Dados
    public function store(Request $request)
    {   
        //seta as variaveis
        $login = Session::all(); 
        $dados = $request->post(); //pega os dados do Form via post
        $eml = ""; //declara a variavel que salvara os emails concatenados 
        $count = count($dados['emails']); // calcula o total de emails

        //looping que concatena os emails Ex: teste@tes.com, joao@hotk.com
        foreach($dados['emails'] as $i=>$email){
            $dados['emails'] = ($count-1 == $i)? $eml .= $email : $eml .= $email.', ';
        }

        $dados['id_login'] = $login['login']['id'];

        //chama o model e salva os dados no bd
        $user = new NewsletterModel;
        $user->create($dados);
        
        //retorna para pagina principal com a mensagem de Sucesso!
        return redirect('/')->with('message', 'Newsletter Enviado Com Sucesso!');
    }
}
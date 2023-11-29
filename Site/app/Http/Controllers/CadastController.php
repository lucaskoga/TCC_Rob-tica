<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atividade;
use App\Models\Instituicao;

class CadastController extends Controller
{
    public function index(){

        $atividade = Atividade::all();

        return view('welcome', ['atividade' => $atividade]);
    }
    
    public function create(){

        return view('tela.cadastroAtividade');
    }

    public function store(Request  $request){

        $atividade = new Atividade;

        $atividade->tipo = $request->tipo;
        $atividade->serie = $request->serie;
        $atividade->nivelAno = $request->nivelAno;
        $atividade->eixo = $request->eixo;
        $atividade->conhecimento = $request->conhecimento;
        $atividade->codHabilidade = $request->codHabilidade;
        $atividade->objetivoAprendizagem = $request->objetivoAprendizagem;
        $atividade->explicacaoHabilidade = $request->explicacaoHabilidade;
        $atividade->historiaAnalogia = $request->historiaAnalogia;
        $atividade->falaPersonagem = $request->falaPersonagem;
        $atividade->exemploRoboticaDesplugado= $request->exemploRoboticaDesplugado;
        $atividade->exemploRoboticaPlugado = $request->exemploRoboticaPlugado;
        $atividade->sugestaoRoboPlugado = $request->sugestaoRoboPlugado;
        $atividade->sugestaoHardware = $request->sugestaoHardware;
        $atividade->esquemaSensor = $request->esquemaSensor;
        $atividade->videoAula = $request->videoAula;
           
        //image uploud
        if($request->hasFile('image')&& $request->file('image')->isvalid()){

            $requestImage = $request->image;
            
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . "." . $extension);

            $requestImage->move(public_path('img/LogoAtividade'), $imageName);

            $atividade->image = $imageName;

        }
        $atividade->save();

        return redirect('/')->with('msg','Atividade Criado com Sucesso');
    }
    
    public function show($id){

        $atividade = Atividade::findOrFail($id);

        return view('tela.show', ['atividade' => $atividade]);

    }


    public function dashboard(){

        $atividade = Atividade::all();

        return view('dashboard', ['atividade' => $atividade]);
    }

    public function createinst(){

        return view('tela.cadastrarInstituicao');
    }
    
    public function storeinst(Request  $request){

        $instituicao = new Instituicao;

        $instituicao->nome = $request->nome;
        $instituicao->descricao = $request->descricao;
        $instituicao->cnpj = $request->cnpj;
        $instituicao->atuacao = $request->atuacao;
        $instituicao->publicoAlvo = $request->publicoAlvo;
        $instituicao->Endereco = $request->Endereco;
        $instituicao->cidade = $request->cidade;
        $instituicao->cep = $request->cep;
        $instituicao->bairro = $request->bairro;
        $instituicao->telefone = $request->telefone;
        $instituicao->email = $request->email;
        $instituicao->nomeContato = $request->nomeContato;
        $instituicao->funcaoContato = $request->funcaoContato;

           
        //image uploud
        if($request->hasFile('image')&& $request->file('image')->isvalid()){

            $requestImage = $request->image;
            
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . "." . $extension);

            $requestImage->move(public_path('img/Instituicao'), $imageName);

            $instituicao->image = $imageName;

        }
        $instituicao->save();

        return redirect('/')->with('msg','Instituicão Cadastrado com Sucesso');
    }
}
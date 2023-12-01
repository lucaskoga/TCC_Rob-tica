<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instituicao;

class InstController extends Controller
{
       
    public function create(){
    
        return view('tela.cadastrarInstituicao');
    }
    
    public function store(Request  $request1){

        $instituicao = new Instituicao;

        $instituicao->nome = $request1->nome;
        $instituicao->descricao = $request1->descricao;
        $instituicao->cnpj = $request1->cnpj;
        $instituicao->atuacao = $request1->atuacao;
        $instituicao->publicoAlvo = $request1->publicoAlvo;
        $instituicao->Endereco = $request1->Endereco;
        $instituicao->cidade = $request1->cidade;
        $instituicao->cep = $request1->cep;
        $instituicao->bairro = $request1->bairro;
        $instituicao->telefone = $request1->telefone;
        $instituicao->email = $request1->email;
        $instituicao->nomeContato = $request1->nomeContato;
        $instituicao->funcaoContato = $request1->funcaoContato;

           
        //image uploud
        if($request1->hasFile('image')&& $request1->file('image')->isvalid()){

            $requestImage = $request1->image;
            
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . "." . $extension);

            $requestImage->move(public_path('img/Instituicao'), $imageName);

            $instituicao->image = $imageName;

        }
        $instituicao->save();

        return redirect('/')->with('msg','Instituicão Cadastrado com Sucesso');
    }
}

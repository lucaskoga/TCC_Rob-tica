<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atividade;

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
}
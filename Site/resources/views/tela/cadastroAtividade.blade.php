@extends('layouts.main')

@section('title','CadastroAtividader')

@section('content')

<div id="atividade-create-container" class="col-md-6 offset md-3">
    <h1>Criar a atividade</h1>
    <form action="/tela" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem de logo</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Tipo</label>
            <textarea style="resize: none" name="tipo" id="tipo" class="form-control" placeholder="Tipo de ensino"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Serie</label>
            <textarea style="resize: none" name="serie" id="serie" class="form-control" placeholder="Qual a serie?"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Nivel/Ano</label>
            <textarea style="resize: none" name="nivelAno" id="nivelAno" class="form-control" placeholder="nivel/Ano"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Eixo</label>
            <textarea style="resize: none" name="eixo" id="eixo" class="form-control" placeholder="Qual o eixo da atividade?"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Conhecimento</label>
            <textarea style="resize: none" name="conhecimento" id="conhecimento" class="form-control" placeholder="Objetivo de conhecimento?"></textarea>
        </div>
        <div class="form-group">
            <label for="title">CodHabilidade</label>
            <textarea style="resize: none" name="codHabilidade" id="codHabilidade" class="form-control" placeholder="Cod.Obj Aprend Ei/ Cod. Habilidade EF_EM"></textarea>
        </div>
        <div class="form-group">
            <label for="title">ObjetivoAprendizagem</label>
            <textarea style="resize: none" name="objetivoAprendizagem" id="objetivoAprendizagem" class="form-control" placeholder="Objetivo de Aprendizagem (EI) / Habilidade EF_EM"></textarea>
        </div>
        <div class="form-group">
            <label for="title">ExplicacaoHabilidade</label>
            <textarea style="resize: none" name="explicacaoHabilidade" id="explicacaoHabilidade" class="form-control" placeholder="Explicação Habilidade"></textarea>
        </div>
        <div class="form-group">
            <label for="title">HistoriaAnalogia</label>
            <textarea style="resize: none" name="historiaAnalogia" id="historiaAnalogia" class="form-control" placeholder="Historia fazendo Analogia com a hailidade proposta"></textarea>
        </div>
        <div class="form-group">
            <label for="title">FalaPersonagem</label>
            <textarea style="resize: none" name="falaPersonagem" id="falaPersonagem" class="form-control" placeholder="Fala dos Personagem"></textarea>
        </div>
        <div class="form-group">
            <label for="title">ExemploRoboticaDesplugado</label>
            <textarea style="resize: none" name="exemploRoboticaDesplugado" id="exemploRoboticaDesplugado" class="form-control" placeholder="Exemplos em Robotica desplugado"></textarea>
        </div>
        <div class="form-group">
            <label for="title">ExemploRoboticaPlugado</label>
            <textarea style="resize: none" name="exemploRoboticaPlugado" id="exemploRoboticaPlugado" class="form-control" placeholder="Exemplos em Robotica Plugado"></textarea>
        </div>
        <div class="form-group">
            <label for="title">SugestaoRoboPlugado</label>
            <textarea style="resize: none" name="sugestaoRoboPlugado" id="sugestaoRoboPlugado" class="form-control" placeholder="Sugestão de resolução Robótica Plugada"></textarea>
        </div>
        <div class="form-group">
            <label for="title">SugestaoHardware</label>
            <textarea style="resize: none" name="sugestaoHardware" id="sugestaoHardware" class="form-control" placeholder="Sugestão de hardware(sensores, motores, arduino e etc"></textarea>
        </div>
        <div class="form-group">
            <label for="title">EsquemaSensor</label>
            <textarea style="resize: none" name="esquemaSensor" id="esquemaSensor" class="form-control" placeholder="Esquema de ligação do arduino com os sensores e com os motores"></textarea>
        </div>
        <div class="form-group">
            <label for="title">VideoAula</label>
            <textarea style="resize: none" name="videoAula" id="videoAula" class="form-control" placeholder="Video das atividades"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar">
    </form>
</div>


@endsection
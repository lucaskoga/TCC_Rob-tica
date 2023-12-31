@extends('layouts.main')

@section('title','Cadastro Instituição')

@section('content')

<div id="instituição-create-container" class="col-md-6 offset md-3">
    <center>
    <h1>Cadastrar a Instituição</h1>
    <form action="/tela/cadastroInstituicao" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem da Instituição</label>
            <input type="file" id="image" name="image" class="form-control-file" required>
        </div>
        <div class="form-group">
            <label for="title">Nome</label>
            <textarea style="resize: none" name="nome" id="nome" class="form-control" placeholder="Nome da Instituição" required></textarea>
        </div>
        <div class="form-group">
            <label for="title">Descrição da Instituição</label>
            <textarea style="resize: none" name="descricao" id="descricao" class="form-control" placeholder="Breve Descrição" required></textarea>
        </div>
        <div class="form-group">
            <label for="title">CNPJ</label>
            <textarea style="resize: none" name="cnpj" id="cnpj" class="form-control" placeholder="CNPJ da Instituição" required></textarea>
        </div>
        <div class="form-group">
            <label for="title">Area de Atuação da Instituição</label>
            <textarea style="resize: none" name="atuacao" id="atuacao" class="form-control" placeholder="Qual a area de atuação?" required></textarea>
        </div>
        <div class="form-group">
            <label for="title">Publico Alvo</label>
            <textarea style="resize: none" name="publicoAlvo" id="publicoAlvo" class="form-control" placeholder="Qual o publico que você trabalha?" required></textarea>
        </div>
        <div class="form-group">
            <label for="title">Endereco</label>
            <textarea style="resize: none" name="Endereco" id="Endereco" class="form-control" placeholder="Qual o indereço sede?" required></textarea>
        </div>
        <div class="form-group">
            <label for="title">Cidade</label>
            <textarea style="resize: none" name="cidade" id="cidade" class="form-control" placeholder="Qual a cidade sede?" required></textarea>
        </div>
        <div class="form-group">
            <label for="title">CEP</label>
            <textarea style="resize: none" name="cep" id="cep" class="form-control" placeholder="CEP da cidade" required></textarea>
        </div>
        <div class="form-group">
            <label for="title">Bairro</label>
            <textarea style="resize: none" name="bairro" id="bairro" class="form-control" placeholder="Bairro que esta localizado a sede?" required></textarea>
        </div>
        <div class="form-group">
            <label for="title">Telefone</label>
            <textarea style="resize: none" name="telefone" id="telefone" class="form-control" placeholder="Telefone de contato" required></textarea>
        </div>
        <div class="form-group">
            <label for="title">E-mail</label>
            <textarea style="resize: none" name="email" id="email" class="form-control" placeholder="E-mail de comunicação" required></textarea>
        </div>
        <div class="form-group">
            <label for="title">Nome do Contato</label>
            <textarea style="resize: none" name="nomeContato" id="nomeContato" class="form-control" placeholder="Nome para Contato" required></textarea>
        </div>
        <div class="form-group">
            <label for="title">Função Contato</label>
            <textarea style="resize: none" name="funcaoContato" id="funcaoContato" class="form-control" placeholder="Qual a função do Contato dentro da instituição?" required></textarea>
        </div>
        
        <input type="submit" class="btn btn-primary" value="Cadastrar Instituição">
    </center>
    </form>
</div>


@endsection
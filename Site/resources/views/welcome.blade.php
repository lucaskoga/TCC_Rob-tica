@extends('layouts.main')

@section('title','Tela do professor')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque uma Atividade</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" pleaceholder="Buscar Atividade">
        </form>
    </div>
    <div id="atividade-container" class="col-md-12">
        <h2>Proximas Atividade</h2>
        <p class="subtitle">Vejas as proximas Atividades</p>
        
        <div id="cards-container" class="row">
            @foreach($atividade as $atividade)
                <div class="card col-md-3">
                    <img src="/img/LogoAtividade/{{ $atividade->image }}" alt="test">
                    <div class="card-body">
                        <p class="card-serie">{{ $atividade->serie }}</p>
                        <h5 class="card-tipo">{{ $atividade->tipo }}</h5>
                        <p class="card-nivel">{{ $atividade->nivelAno }}</p>
                        <a href="#" class="btn btn-primary">Informação das atividade</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
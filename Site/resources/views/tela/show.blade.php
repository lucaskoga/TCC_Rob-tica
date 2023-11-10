@extends('layouts.main')

@section('title',' Atividade')

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/LogoAtividade/{{ $atividade->image }}" class="img-fluid" alt="atividade">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $atividade->tipo }}</h1>
                <p class="serie">{{ $atividade->serie }}</p>
            </div>
        </div>
    </div>

@endsection
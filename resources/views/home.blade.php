@extends('layouts.app')

@section('content')

<pagina tamanho="10">
    <painel titulo="Dashboard">
        <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
        <div class="row">
            <div class="col-md-4">
                <caixa quantidade="{{$totalArtigos}}" titulo="Artigos" url="{{route('artigos.index')}}" cor="#dc3545" icone="ion ion-pie-graph"></caixa>
            </div>
            <div class="col-md-4">
                <caixa quantidade="{{$totalUsuarios}}" titulo="Usuários" url="{{route('usuarios.index')}}" cor="#17a2b8" icone="ion ion-person-stalker"></caixa>
            </div>
            <div class="col-md-4">
                <caixa quantidade="{{$totalAutores}}" titulo="Autores" url="{{route('autores.index')}}" cor="#ffc107" icone="ion ion-person"></caixa>
            </div>
        </div>
    </painel>
</pagina>
@endsection 
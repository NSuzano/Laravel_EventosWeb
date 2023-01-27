@extends('layouts.main')

@section('title', 'Produto ')

@section('content')

    <p>Tela de Produtos</p>
    @if($busca != '')
        <p>O usuário está buscando por: {{ $busca }}</p>
        <p>

    @endif

@endsection

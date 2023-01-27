@extends('layouts.main')

@section('title', 'HDC EVENTS ')

@section('content')

       <h1>Título</h1>
       @if($nome == 'Nathan') 
            <p> Meu nome é {{$nome}}</p>
            <a href="product" > Produtos</a>
       @endif

@endsection    
       


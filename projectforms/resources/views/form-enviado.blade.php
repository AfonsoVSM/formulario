@extends('layout')
@section('titulo-pagina')
Formulário submetido
@endsection
@section('header')
Informaçao enviada ataves de form
@endsection
@section('conteudo')
    {{$nome}}<br>
    {{$morada}}<br>
    {{$automovel}}
@endsection
@extends('layouts.app')

@section('title', 'Início')

@section('content')
    <h1>Bem-vindo</h1>
    <p>Página inicial do sistema de alunos.</p>

    @include('partials.mensagem')
@endsection
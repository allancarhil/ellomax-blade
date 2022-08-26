@extends('components.includes.template')

@section('conteudo')
    <h2>Recuperação de senha</h2>

    Token de segurança<br>
    {{Str::uuid()}}
@endsection
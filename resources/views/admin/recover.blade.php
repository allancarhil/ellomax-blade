@extends('components.includes.template')

@section('conteudo')
<h2>Recuperação de senha</h2>]

<!-- 
    mudar o método para post-enviar email
 -->
<form action="{{route('auth.email.action.recovery')}}" method="post">
    @csrf
    <input type="email" name="email" id="email" placeholder="digite seu email para recuperar a senha">
    <input type="submit" value="recuperar">
</form>
@endsection
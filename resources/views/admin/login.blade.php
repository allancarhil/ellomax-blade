@extends('components.includes.template')

@section('conteudo')
    <h2>Login</h2>

    <form action="{{route('auth.login')}}" method="POST">
        @csrf
    <div class="login">
        <div>
            <label for="email">
                <input type="email" name="email" id="email">
            </label>
        </div>
        <div>
            <label for="psw">
                <input type="password" name="psw" id="psw">
            </label>
        </div>
        <div>
            <input type="submit" value="Login">
            <a href="{{route('auth.recover')}}">Esqueci a minha senha</a>
        </div>
    </div>
    </form>

@endsection
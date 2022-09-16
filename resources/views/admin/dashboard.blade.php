@extends('components.includes.template')

@section('conteudo')
    <h2>Dashboard</h2>
    {{$user->name}}
    {{$user->remember_token}}
    <a href="{{route('auth.logout')}}">Logout</a>

    <a href="{{route('dashboard.show.my.companies')}}">opa</a>
@endsection
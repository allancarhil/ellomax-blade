@extends('components.includes.template')

@section('conteudo')
    <h2>Dashboard</h2>
    {{$user->name}}
    {{$user->remember_token}}
    <a href="{{route('auth.logout')}}">Logout</a>

    <div class="item h-100 d-flex justify-content-center align-items-center">
                @foreach($companies as $company)
                @include('components.card.card')
                @endforeach
            </div>
@endsection
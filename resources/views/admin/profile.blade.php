@extends('components.includes.template')

@section('conteudo')
<h2>Dashboard</h2>
<form action="{{route('dashboard.action.perfil',['id'=>$user->id])}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" id="user_name" value='{{$user->name}}'>
    <input type="text" name="name" id="user_email" value='{{$user->email}}' disabled>
    <input type="submit" value="SALVAR">
</form>
<a href="{{route('auth.logout')}}">Logout</a>
@if(session()->has('profile-edit-success'))
<div class="alert alert-success" role="alert">
    <p>{{session('profile-edit-success')}}</p>
</div>
{{session()->forget('profile-edit-success')}}
@endIf
@if(session()->has('profile-edit-error'))
<div class="alert alert-error" role="alert">
    <p>{{session('profile-edit-error')}}</p>
</div>
{{session()->forget('profile-edit-error')}}
@endIf
@endsection
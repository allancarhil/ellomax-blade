@extends('components.includes.template')

@section('conteudo')
    <h2>Título da postagem</h2>
    <p> Lorem ipsum dolor sit amet (...) </p>
    
    @include('components.formsteps.sale.form')
    @include('components.formsteps.rent.form')
    
   
    
@endsection
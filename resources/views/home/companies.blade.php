@extends('components.includes.template')

@section('conteudo')

@foreach($companies as $company)
@include('components.card.card')
@endforeach

@endsection
@extends('components.includes.template')

@section('conteudo')
<div class="companies-result">
@foreach($companies as $company)
@include('components.card.card')
@endforeach
</div>
@endsection
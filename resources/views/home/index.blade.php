@extends('components.includes.template')

@section('conteudo')

<section class="banner">
<div class="banner1">
    <button>teste</button>
</div>
</section>
<section class="banner">
<div class="banner2">
    <button>teste</button>
</div>
</section>
<section class="card">
<div class="h-100 d-flex justify-content-center align-items-center">
    @foreach($companies as $company)
    @include('components.card.card')
    @endforeach
</div>
</section>

@endsection
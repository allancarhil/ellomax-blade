@extends('components.includes.template')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('conteudo')
<div class="banner1preSell">
    <a href="{{route('pages.form.sell')}}"> <button>ANUNCIE SUA EMPRESA</button></a>
</div>
<div class="banner2preSell">

</div>
<section class="banner3">
    <div class="chains">
    </div>
</section>

@endsection
@extends('components.includes.template')


@section('conteudo')
{{$company->cnpj}}

<video controls>
  <source src="{{url("storage/$company->video")}}" type="video/mp4">
  Your browser does not support the video tag.
</video>
        @endsection
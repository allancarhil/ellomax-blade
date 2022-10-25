@extends('components.includes.template')


@section('conteudo')
{{$company->cnpj}}
<div class="media">
  <video controls>
    <source src="{{url("storage/$company->video")}}" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  FOTOS
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FOTOS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="fotorama">
          @foreach($company->images as $image)
          <img src="{{url("storage/$image")}}">
          @endforeach
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">FECHAR</button>

      </div>
    </div>
  </div>
</div>







@endsection
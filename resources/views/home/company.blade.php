@extends('components.includes.template')


@section('conteudo')


<section class="produtos">
  <div class="informacoes">

    <h2>
      {{$company->companyName}}
    </h2>
    <div class="tags">
      @foreach($tags as $tag)
      <a href="{{route('home.action.simple.search',['occupation'=>$tag])}}" class="tagsButton">{{$tag}}</a>
      @endforeach
    </div>
    <div class="basics">
      <div class="grid-container">
        <div class="grid-item"><i class="fa-solid fa-money-bill-1-wave"></i><b>Venda:</b>{{\App\Helpers\CompanyTypeHelper::mask($company->sale_type)}}
        </div>
        <div class="grid-item"><i class="fa-solid fa-tag"></i><b>Tipo de Negócio:</b>{{$company->segment->name}} </div>
        <div class="grid-item"><i class="fa-solid fa-location-dot"></i><b>Localização:</b>{{ucfirst($company->street).", ".ucfirst($company->city)."- ".($company->state)}}</div>
        <div class="grid-item"><i class="fa-solid fa-registered"></i><b>Marca registrada:</b>{{\App\Helpers\CompanyTradeMarkHelper::mask($company->trade_mark)}}
        </div>
      </div>
    </div>
  </div>




  <div class="media-grid">
    <div class="grid-item-image">
      <img src="{{url("storage/$company->main_image")}}" alt="Imagem referente à empresa de nome {{$company->companyName}}">
    </div>
    <div class="grid-item-description">
      <h3>
        {{$company->description}}
      </h3>
    </div>

  </div>



  <!-- Button trigger modal -->
  <div class="fotos">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class="fa-regular fa-image"></i>
      Fotos
    </button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalVideo">
      <i class="fa-solid fa-video"></i>
      Vídeos
    </button>
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class="fa-solid fa-print"></i>
      imprimir
    </button> -->

    <a class="btn btn-primary" style="border-radius:1.5rem;" href="https://api.whatsapp.com/send?text={{urlencode(url()->current()) }}"><i class="fab fa-whatsapp"></i>Compartilhar</a>
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class="fa-solid fa-heart"></i>
      Adicionar a lista
    </button> -->
  </div>

  <div class="buyco-block small--margin oportunity__investment-analysis">
    <!-- carousel aqui -->
    <h2>ANÁLISE do investimento</h2>

    <!-- Carousel Team -->
    <div class="about-us-employers__time">
      <div class="swiper-analyses-investiment swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-multirow">
        <div class="swiper-wrapper" style="display:flex;width: 1183px; transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">

          <div class="swiper-slide swiper-slide-active" style="width: 280.75px; margin-right: 15px;">
            <div class="analyses-col">
              <h3>
                <i class="fa-solid fa-ruler-combined"></i>
              </h3>
              <h3>{{$company->area}}m²</h3>
              <h5>
                Área útil em metros quadrados da empresa
              </h5>
            </div>
          </div>

          <div class="swiper-slide swiper-slide-next" style="width: 280.75px; margin-right: 15px;">
            <div class="analyses-col">
              <h3>
                <i class="fa-solid fa-people-group"></i>
              </h3>
              <h3>{{$company->number_employees}}</h3>
              <h5>
                Funcionários e demais colaboradores
              </h5>
              <!-- <img class="img-fluid" src="https://buyco.com.br/wp-content/themes/buyco/assets/images/employers.png" alt="ícone ilustrativo de funcionários"> -->
            </div>
          </div>

          <!-- Margem de Licro Liquido -->
          <div class="swiper-slide" style="width: 280.75px; margin-right: 15px;">
            <div class="analyses-col">
              <h3>
                <i class="fa-solid fa-money-bill-1-wave"></i>
              </h3>
              <h3>{{$company->profits}}%</h3>
              <h5>
                Margem de lucro líquido da empresa
              </h5>
            </div>
          </div>

          <!-- Valor do negócio -->
          <div class="swiper-slide" style="width: 280.75px; margin-right: 15px;">
            <div class="analyses-col">
              <h3>
                <i class="fa-solid fa-file-invoice-dollar"></i>
              </h3>
              <h3>R$ {{$company->month_profits}}</h3>
              <h5>
                Média de faturamento mensal
              </h5>
            </div>
          </div>

          <!-- Necessidade de capital de giro -->
          <div class="swiper-slide" style="margin-top: 15px; width: 280.75px; margin-right: 15px;">
            <div class="analyses-col">
              <h3>
                <i class="fa-solid fa-dollar-sign"></i>
              </h3>
              <h3>R$ {{$company->working_capital}}</h3>
              <h5>
                NCG
              </h5>
              <p class="size--small"> A Necessidade de Capital de Giro (NCG) refere-se ao valor suficiente para manter o funcionamento da empresa</p>
              <!--<span class="weight--bold">Nota da BuyCo.</span>
								 <p class="size--small buyco-observation">
									O empresário que comprar essa empresa deve lembrar que é importante ter esse valor em caixa para manter suas operações.
								</p> -->
            </div>
          </div>

          <!-- liquidez corrente -->
          <div class="swiper-slide" style="margin-top: 15px; width: 280.75px; margin-right: 15px;">
            <div class="analyses-col">
              <h3>
                <i class="fa-solid fa-percent"></i>
              </h3>
              <h3>{{$company->debts}}</h3>
              <h5>
                Liquidez corrente
              </h5>
              <p class="size--small"> Quanto das dívidas a empresa consegue pagar a curto prazo</p>
              <!-- <span class="weight--bold">Nota da Buyco</span>
								<p class="size--small buyco-observation">
									O valor desse indicador de acordo com a expectativa do mercado é que seja maior que 1
								</p> -->
            </div>
          </div>

          <!-- ROI mensal -->
          <div class="swiper-slide" style="margin-top: 15px; width: 280.75px; margin-right: 15px;">
            <div class="analyses-col">
              <h3>
                <i class="fa-solid fa-rotate-left"></i>
              </h3>
              <h3>{{$company->roi_month}}%</h3>
              <h5>
                ROI mensal
              </h5>
              <p class="size--small"> Quanto dinheiro você está ganhando com seus investimentos</p>
              <!-- <span class="weight--bold">Nota da Buyco</span>
								<p class="size--small buyco-observation">
									O retorno médio do índice de CDI é próximo de 0,28 ao mês, ou seja, a empresa é 1.0x mais rentável que investir no CDI
								</p> -->
            </div>
          </div>

          <!-- Ponto de Equilíbrio -->
          <div class="swiper-slide" style="margin-top: 15px; width: 280.75px; margin-right: 15px;">
            <div class="analyses-col">
              <h3>
                <i class="fa-solid fa-scale-balanced"></i>
              </h3>
              <h3>R$ {{$company->break_even}}</h3>
              <h5>
                Ponto de equilíbrio
              </h5>
              <p class="size--small"> Quanto você deve faturar a fim de equilibrar suas contas</p>
              <!-- <span class="weight--bold">Nota da Buyco</span>
								<p class="size--small buyco-observation">
									Para que a empresa não apresente prejuízo financeiro é importante entender o que ela precisa faturar (vender) em cada mês
								</p> -->
            </div>
          </div>

        </div>
        <div class="buyco__swiper-controls__wrapper visible--only-desktop">
          <div class="swiper-button-prev analysis__prev swiper-button-disabled"></div>
          <div class="swiper-pagination analysis__pagination swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span></div>
          <div class="swiper-button-next analysis__next swiper-button-disabled"></div>
        </div>
      </div>
    </div>
  </div>


  <div class="buyco-block oportunity__sell-pricing">
    <h3>Valor indicado para venda:</h3>
    <div class="sell-princing__wrapper">
      <span>{{$company->price}}</span>
    </div>
  </div>





  <div class="price">
    <h1></h1>
  </div>
  <div class="social">
    <h1>Presença digital</h1>
    <div class="social_midia">



      <div class="face">
        <i class="fa-brands fa-facebook"></i>
        @if(!is_null($company->facebook))
        <h5>Facebook:<br> {{$company->facebook}}</h5>
        @else
        <h5>Facebook: <br>Não informado</h5>
        @endif
      </div>


      <div class="insta">
        <i class="fa-brands fa-instagram"></i>
        @if(!is_null($company->instagram))
        <h5>Instagram: <br>{{$company->instagram}}</h5>
        @else
        <h5>Instagram:<br> Não informado</h5>
        @endif
      </div>


      <div class="site">
        <i class="fa-solid fa-globe"></i>
        @if(!is_null($company->site))
        <h5>Website: <br><a href="{{$company->site}}">{{$company->site}}</a></h5>
        @else
        <h5>Website:<br> Não informado</h5>
        @endif
      </div>
    </div>

  </div>








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





  <!-- Modal -->
  <div class="modal fade" id="exampleModalVideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">VIDEOS</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="fotorama" id="controls">

            <video controls>
              <source src="{{url("storage/$company->video")}}" type="video/mp4">
              Your browser does not support the video tag.
            </video>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">FECHAR</button>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact">

  <div class="container contact-form card">
    <div class="contact-image">
      <img src="public/images/x.png" alt="contact" />
    </div>
    <form method="post">
      <h2>Vamos Conversar?</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="txtName" class="form-control" placeholder="Seu nome *" value="" />
          </div>
          <div class="form-group">
            <input type="text" name="txtEmail" class="form-control" placeholder="Seu melhor email *" value="" />
          </div>
          <div class="form-group">
            <input type="text" name="txtPhone" class="form-control" placeholder="Seu telefone *" value="" />
          </div>
          <div class="form-group">
            <input type="submit" name="btnSubmit" class="btnContact" value="ENVIAR" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <textarea name="txtMsg" class="form-control" placeholder="Mensagem*" style="width: 100%; height: 150px;"></textarea>
          </div>
        </div>
      </div>
    </form>

</section>





@endsection
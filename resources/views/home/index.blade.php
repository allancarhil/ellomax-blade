@extends('components.includes.template')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('conteudo')


<div class="banner1">
    <button>CONHEÇA AS OPORTUNIDADES</button>
</div>

<section class="banner">
    <div class="banner2">
    </div>
</section>
<section class="banner3">
    <div class="chains">
    </div>
</section>

<section class="companies container">
    <div class="container search-form card">
        <div class="simplesearch">

            <form action="{{route('home.action.simple.search')}}" method="post">
                @csrf
                <h2>Que tipo de empresa você busca?</h2>
                <div class="occupation">
                    <input type="text" name="occupation" class="form-control occ" placeholder="Ocupação" value="" />
                    <input type="submit" class="btnSearch" value="BUSCAR">
                </div>
            </form>
        </div>
        <hr>
        <div class="advancedfilter">
            <form action="{{route('home.action.advanced.search')}}" method="post">
                @csrf
                <div class="advanced-segment flex">
                    <select name="segment" id="segment" class="form-control flex-items">
                        @foreach($segments as $segment)
                        <option value="" disabled selected hidden>Segmento</option>
                        <option value="{{$segment->id}}">{{$segment->name}}</option>
                        @endforeach
                    </select>
                    <input type="text" name="max-value" id="price" class="form-control flex-items" placeholder="valor máximo">
                </div>
                <div class="advanced-state flex">
                    <select name="estado" id="estado" class="form-control flex-items ">
                        <option value="">Selecione um estado</option>
                    </select>
                    <select name="cidade" id="cidade" class="form-control flex-items">
                        <option value="">Selecione uma cidade</option>
                    </select>
                    <input type="submit" class="btnAdvancedSearch" value="BUSCAR">
                </div>
                <button class="btnListSearch">LISTAR TODAS AS EMPRESAS</button>
            </form>
        </div>
    </div>




















    <div class=" d-flex justify-content-center align-items-center">
        <h1>Seleção Ellomax</h1>
    </div>

    <div class="companies">
        <div class="owl-carousel owl-theme">
            <div class="item h-100 d-flex justify-content-center align-items-center">
                @foreach($companies as $company)
                @include('components.card.card')
                @endforeach
            </div>
            <div class="customNextBtn">
            </div>
        </div>
    </div>
</section>



<section class="banner3">
    <div class="chains">
    </div>

</section>
<section class="results">
    <h1>Resultados que falam por si</h1>
    <div class="container">


        <div class="row">

            <div class="four col-md-3">
                <div class="counter-box colored">
                    <i class="fa-solid fa-city"></i>
                    <span class="counter">10000</span>
                    <p>Negócios <br> atendidos</p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box colored">
                    <i class="fa-solid fa-user-group"></i>
                    <span class="counter">1500</span>
                    <p>Consultores especializados</p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box colored">
                    <i class="fa-solid fa-dollar-sign"></i>
                    <span class="counter">150</span>
                    <p>Milhões movimentados</p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box colored">
                    <i class="fa-solid fa-handshake"></i>
                    <span class="counter">50000</span>
                    <p>Pessoas <br>conectadas</p>
                </div>
            </div>
        </div>
    </div>

</section>


<section class="banner">
    <div class="banner4">
        
    </div>

    <section class="banner3">
        <div class="chains">
        </div>

    </section>
    <section class="testimonials">
        <h1>O que falam de nós</h1>

        <div class="owl-carousel owl-theme">
            <figure class="snip1533">

                <figcaption>
                    <blockquote>
                        <p>If you do the job badly enough, sometimes you don't get asked to do it again.</p>
                    </blockquote>
                    <h3>Wisteria Ravenclaw</h3>
                    <h4>Google Inc.</h4>
                </figcaption>
            </figure>
            <figure class="snip1533">
                <figcaption>
                    <blockquote>
                        <p>I'm killing time while I wait for life to shower me with meaning and happiness.</p>
                    </blockquote>
                    <h3>Ursula Gurnmeister</h3>
                    <h4>Facebook</h4>
                </figcaption>
            </figure>
            <figure class="snip1533">
                <figcaption>
                    <blockquote>
                        <p>The only skills I have the patience to learn are those that have no real application in life. </p>
                    </blockquote>
                    <h3>Ingredia Nutrisha</h3>
                    <h4>Twitter</h4>
                </figcaption>
            </figure>
        </div>
        <div class="customNextBtn">
        </div>
    </section>



























    @endsection
@extends('components.includes.template')


@section('conteudo')

<section class="banner">
    <div class="banner1">
        <button>teste</button>
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
        <div class="h-100 d-flex justify-content-center align-items-center">
            <h1>Seleção Ellomax</h1>

        </div>



        <div class="bs-example">
            <form action="{{route('home.action.simple.search')}}" method="post">
                @csrf

                <input type="text" name="occupation" value="" data-role="tagsinput" id="tags" />
                <input type="submit" value="BUSCAR">
            </form>
        </div>
        </form>
        <div class="advancedfilter">
            <form action="{{route('home.action.advanced.search')}}" method="post">
                @csrf
                <select name="segment" id="segment">
                    @foreach($segments as $segment)
                    <option value="{{$segment->id}}">{{$segment->name}}</option>
                    @endforeach
                </select>

                <select name="estado" id="estado">
                    <option value="">Selecione um estado</option>
                </select>
                <select name="cidade" id="cidade">
                <option value="">Selecione uma cidade</option>
                </select>
                <input type="submit" value="BUSCAR">
            </form>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item h-100 d-flex justify-content-center align-items-center">
                @foreach($companies as $company)
                @include('components.card.card')
                @endforeach
            </div>
            <div class="customNextBtn">

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
            <button>teste</button>
        </div>

        <section class="banner3">
            <div class="chains">
            </div>

        </section>
        <section class="testimonials">
            <h1>O que falam de nós</h1>
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
        </section>



























        @endsection
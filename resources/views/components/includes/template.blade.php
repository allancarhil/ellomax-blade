<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{url(mix('css/bootstrap.css'))}}">
  <link rel="stylesheet" href="{{url(mix('css/icons.css'))}}">
  <link rel="stylesheet" href="{{url(mix('css/app.css'))}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <title>Document</title>
</head>

<body>



    <nav class="navbar navbar-expand-custom navbar-mainbg">
      <a class="navbar-brand navbar-logo" href="{{route('home.index')}}"><img class="logo" src="{{url('/')}}/images/logonova.png" alt="IMG"></a>
      <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link" href="{{route('show.prebuy.page')}}">Comprar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('show.presell.page')}}">Vender</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);">Arrendar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);">Avaliar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('show.aboutus.page')}}">Sobre nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('show.contact.page')}}">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('show.beone.page')}}">Seja um franqueado</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://ellonegocios.wordpress.com/">Blog</a>
          </li>
          @if(session()->has("usuario-logado"))
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.index')}}">Dashboard</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{route('auth.index')}}">Acessar</a>
          </li>
          @endIf
        </ul>
      </div>

      <ul>

      </ul>
    </nav>
    @yield('conteudo')

    @section('scripts-home')
    @include('components.includes.scripts')
    @show
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Fotorama from CDNJS, 19 KB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

    <!-- Footer aqui -->

    <div class="pg-footer">
      <footer class="footer">
        <svg class="footer-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100" preserveAspectRatio="none">
          <path class="footer-wave-path" d="M851.8,100c125,0,288.3-45,348.2-64V0H0v44c3.7-1,7.3-1.9,11-2.9C80.7,22,151.7,10.8,223.5,6.3C276.7,2.9,330,4,383,9.8 c52.2,5.7,103.3,16.2,153.4,32.8C623.9,71.3,726.8,100,851.8,100z"></path>
        </svg>
        <div class="footer-content">
          <div class="footer-content-column">
            <div class="footer-logo">
              <a class="footer-logo-link" href="{{route('home.index')}}">
                <img src="{{url('/')}}/images/logobranca.png" alt="logofooter">
              </a>
            </div>
            <div class="footer-menu">
              <p>®Ellomax, assessoramos processos de compra, venda, aluguel, arrendamento e avaliação de empresa em todo o Brasil</p>
            </div>
          </div>
          <div class="footer-content-column">
            <div class="footer-menu">
              <h2 class="footer-menu-name">A ELLOMAX</h2>

              <ul id="menu-quick-links" class="footer-menu-list">
                <li class="menu-item menu-item-type-custom menu-item-object-custom">
                  <a target="_blank" rel="noopener noreferrer" href="{{route('show.aboutus.page')}}">Sobre nós</a>
                </li><br>

                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                  <a href="https://ellonegocios.wordpress.com/">Blog</a>
                </li><br>
              </ul>
            </div>

          </div>
          <div class="footer-content-column">
            <div class="footer-menu">
              <h2 class="footer-menu-name"> Serviços</h2>
              <ul id="menu-quick-links" class="footer-menu-list">
                <li class="menu-item menu-item-type-custom menu-item-object-custom">
                  <a target="_blank" rel="noopener noreferrer" href="{{route('show.aboutus.page')}}">Compra</a>
                </li><br>

                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                  <a href="#">Venda</a>
                </li><br>

                <li class="menu-item menu-item-type-post_type_archive menu-item-object-customer">
                  <a href="#">Arrendamento</a>
                </li><br>
                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                  <a href="#">Avaliação</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer-content-column">

            <div class="footer-call-to-action">
              <h2 class="footer-call-to-action-title"> Nosso telefone</h2>
              <p class="footer-call-to-action-link-wrapper"> <a class="footer-call-to-action-link" href="tel:+(55)32 32411955" target="_self"> +553232411955 </a></p>
            </div>
            <div class="footer-call-to-action">
              <h2 class="footer-call-to-action-title"> Nosso Endereço</h2>
              <p class="footer-call-to-action-link-wrapper"> <a class="footer-call-to-action-link" target="_self"> R. Dom Viçoso, 204 - Passos, Juiz de Fora - MG, 36026-390 </a></p>
            </div>
          </div>


          <div class="footer-call-to-action-contact">
            <h2 class="footer-call-to-action-title"> Vamos Conversar?</h2>
            <p class="footer-call-to-action-description"> Possui alguma dúvida??</p>
            <a class="footer-call-to-action-button button" href="{{route('show.contact.page')}}" target="_self"> Fale conosco </a>
          </div>


          <hr style="width: 80vw;color:black;">
          <div class="footer-social-links"> <svg class="footer-social-amoeba-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236 54">
              <path class="footer-social-amoeba-path" d="M223.06,43.32c-.77-7.2,1.87-28.47-20-32.53C187.78,8,180.41,18,178.32,20.7s-5.63,10.1-4.07,16.7-.13,15.23-4.06,15.91-8.75-2.9-6.89-7S167.41,36,167.15,33a18.93,18.93,0,0,0-2.64-8.53c-3.44-5.5-8-11.19-19.12-11.19a21.64,21.64,0,0,0-18.31,9.18c-2.08,2.7-5.66,9.6-4.07,16.69s.64,14.32-6.11,13.9S108.35,46.5,112,36.54s-1.89-21.24-4-23.94S96.34,0,85.23,0,57.46,8.84,56.49,24.56s6.92,20.79,7,24.59c.07,2.75-6.43,4.16-12.92,2.38s-4-10.75-3.46-12.38c1.85-6.6-2-14-4.08-16.69a21.62,21.62,0,0,0-18.3-9.18C13.62,13.28,9.06,19,5.62,24.47A18.81,18.81,0,0,0,3,33a21.85,21.85,0,0,0,1.58,9.08,16.58,16.58,0,0,1,1.06,5A6.75,6.75,0,0,1,0,54H236C235.47,54,223.83,50.52,223.06,43.32Z"></path>
            </svg>
            <a class="footer-social-link linkedin" href="#" target="_blank">
              <span class="hidden-link-text">Linkedin</span>
              <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                <path class="footer-social-icon-path" d="M9,25H4V10h5V25z M6.501,8C5.118,8,4,6.879,4,5.499S5.12,3,6.501,3C7.879,3,9,4.121,9,5.499C9,6.879,7.879,8,6.501,8z M27,25h-4.807v-7.3c0-1.741-0.033-3.98-2.499-3.98c-2.503,0-2.888,1.896-2.888,3.854V25H12V9.989h4.614v2.051h0.065 c0.642-1.18,2.211-2.424,4.551-2.424c4.87,0,5.77,3.109,5.77,7.151C27,16.767,27,25,27,25z"></path>
              </svg>
            </a>
            <a class="footer-social-link twitter" href="#" target="_blank">
              <span class="hidden-link-text">Twitter</span>
              <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                <path class="footer-social-icon-path" d="M 25.855469 5.574219 C 24.914063 5.992188 23.902344 6.273438 22.839844 6.402344 C 23.921875 5.75 24.757813 4.722656 25.148438 3.496094 C 24.132813 4.097656 23.007813 4.535156 21.8125 4.769531 C 20.855469 3.75 19.492188 3.113281 17.980469 3.113281 C 15.082031 3.113281 12.730469 5.464844 12.730469 8.363281 C 12.730469 8.773438 12.777344 9.175781 12.867188 9.558594 C 8.503906 9.339844 4.636719 7.246094 2.046875 4.070313 C 1.59375 4.847656 1.335938 5.75 1.335938 6.714844 C 1.335938 8.535156 2.261719 10.140625 3.671875 11.082031 C 2.808594 11.054688 2 10.820313 1.292969 10.425781 C 1.292969 10.449219 1.292969 10.46875 1.292969 10.492188 C 1.292969 13.035156 3.101563 15.15625 5.503906 15.640625 C 5.0625 15.761719 4.601563 15.824219 4.121094 15.824219 C 3.78125 15.824219 3.453125 15.792969 3.132813 15.730469 C 3.800781 17.8125 5.738281 19.335938 8.035156 19.375 C 6.242188 20.785156 3.976563 21.621094 1.515625 21.621094 C 1.089844 21.621094 0.675781 21.597656 0.265625 21.550781 C 2.585938 23.039063 5.347656 23.90625 8.3125 23.90625 C 17.96875 23.90625 23.25 15.90625 23.25 8.972656 C 23.25 8.742188 23.246094 8.515625 23.234375 8.289063 C 24.261719 7.554688 25.152344 6.628906 25.855469 5.574219 "></path>
              </svg>
            </a>
            <a class="footer-social-link youtube" href="#" target="_blank">
              <span class="hidden-link-text">Youtube</span>
              <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                <path class="footer-social-icon-path" d="M 15 4 C 10.814 4 5.3808594 5.0488281 5.3808594 5.0488281 L 5.3671875 5.0644531 C 3.4606632 5.3693645 2 7.0076245 2 9 L 2 15 L 2 15.001953 L 2 21 L 2 21.001953 A 4 4 0 0 0 5.3769531 24.945312 L 5.3808594 24.951172 C 5.3808594 24.951172 10.814 26.001953 15 26.001953 C 19.186 26.001953 24.619141 24.951172 24.619141 24.951172 L 24.621094 24.949219 A 4 4 0 0 0 28 21.001953 L 28 21 L 28 15.001953 L 28 15 L 28 9 A 4 4 0 0 0 24.623047 5.0546875 L 24.619141 5.0488281 C 24.619141 5.0488281 19.186 4 15 4 z M 12 10.398438 L 20 15 L 12 19.601562 L 12 10.398438 z"></path>
              </svg>
            </a>
            <a class="footer-social-link github" href="#" target="_blank">
              <span class="hidden-link-text">Github</span>
              <svg xmlns="http://www.w3.org/2000/svg" style="fill:white;" viewBox="0 0 448 512">
                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
              </svg> </a>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="footer-copyright-wrapper">
            <p class="footer-copyright-text">
              <a class="footer-copyright-link" href="#" target="_self"> ®Copyright © Ellomax. - 2022. Todos os direitos reservados <br />
                Termos de uso e privacidade.</a>
            </p>
          </div>
        </div>
      </footer>
    </div>
    <!--End Footer-->




    <script>
      $('.owl-carousel').owlCarousel({

        nav: true,
        loop: true,
        autoWidth: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        center: true,
        responsiveClass: true,
        mouseDrag: true,
        touchDrag: true,
        rewind: true,
        slideBy: 2,
        //navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        items: 3,
        responsive: {
          0: {
            items: 3,
            nav: true,

          },
          600: {
            items: 3,
            nav: true,

          },
          1000: {
            items: 4,
            nav: true,

          }
        }
      });
      $('.customNextBtn').click(function() {
        owl.trigger('next.owl.carousel');
      })
      // Go to the previous item
      $('.customPrevBtn').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [3000]);
      });
      $('#featuredproducts .owl-carousel').removeClass('disabled');

      $('#featuredproducts .owl-carousel').click(function(event) {
        $(this).removeClass('disabled');
      });




      $(document).ready(function() {

        $('.counter').each(function() {
          $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
          }, {
            duration: 4000,
            easing: 'swing',
            step: function(now) {
              $(this).text(Math.ceil(now));
            }
          });
        });

      });
    </script>
</body>

</html>
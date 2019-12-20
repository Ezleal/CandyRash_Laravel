

<!doctype html>
<html lang="es">

<head>

   <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Style -->
  <link rel="stylesheet" href="/css/styles.css">

@yield('more-css')


  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">
  <!-- Ionic icons-->
  <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="shortcut icon" href="/images/_icon.png" />
  <link rel="stylesheet" href="/fontawesome/css/all.min.css">
    <title>Candy Rash</title>
</head>
<!--------------------------------------- INICIO DE HEADER ---------------------------------->
<body>
  <header>

      <nav class="navbar navbar-expand-lg fixed-top">
          <div class="container">
              <a class="candy" href="/">CANDY RASH!</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="icon ion-md-menu"></i>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @auth
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="/carrito"> Carrito  </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/perfil">Perfil</a>
                    </li>
                      <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Productos</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/#productos">Dulces</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#tortas">Tortas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#pricing">Promos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/candys">Listado</a>
                    </li>
                  </ul>
                  <li class="nav-item">
                      <a class="nav-link" href="/#testimonial">Testimonios</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/#contact">Contacto</a>
                  </li>
                  <li class="nav-item">
                    {{-- <a class="nav-link" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Salir</a> --}}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="dislpay:none">
                        @csrf
                    </form>
                  </li>
                               </ul>

                @else



                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Registrarse</a>
                    </li>
                      <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Productos</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/candys">Dulces</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#tortas">Tortas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#pricing">Promos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/candys">Listado</a>
                    </li>

                  </ul>
                  <li class="nav-item">
                      <a class="nav-link" href="/#testimonial">Testimonios</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/#contact">Contacto</a>
                  </li>
                               </ul>


    @endauth


              </div>
          </div>
      </nav>

  <!---------------------------------------- FIN DE HEADER --------------------------------------------->
  </header>
  <!---------------------------------------- INICIO DE MAIN --------------------------------------------->

        @yield('main')


    <!-- Footer INICIO -->
    <footer class="bgDark">
        <div class="container">
            <a class="candy "href="/#">CANDY RASH!</a>
            <ul class="list-inline">
                <li class="list-inline-item footer-menu badge badge-info"><a href="/#"><b>Subir</b></a></li>
                <li class="list-inline-item footer-menu badge badge-info"><a href="/faq"><b>FAQ</b></a></li>
                <li class="list-inline-item footer-menu badge badge-info"><a href="/#contact"><b>Contacto</b></a></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item badge badge-danger"><a href="https://www.instagram.com"><i class="icon ion-logo-instagram "></i></a></li>
                <li class="list-inline-item badge badge-info"><a href="https://www.twitter.com"><i class="icon ion-logo-twitter"></i></a></li>
                <li class="list-inline-item badge badge-danger"><a href="https://www.youtube.com"><i class="icon ion-logo-youtube"></i></a></li>
                <li class="list-inline-item badge badge-primary"><a href="https://www.facebook.com"><i class="icon ion-logo-facebook"></i></a></li>
            </ul>
        </div>

        <div class="footer-bottom">
     <div class="container">
       <div class="row d-flex">
         <p class="col-lg-12 footer-text text-center btn btn-info">

    ©2019 All Rights Reserved by Bomba inc.</p>
       </div>
     </div>
    </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


</body>

</html>

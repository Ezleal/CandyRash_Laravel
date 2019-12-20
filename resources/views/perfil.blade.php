@extends('layouts/candy_index')

@section('main')


  <link rel="stylesheet" href="/css/styles.css">





        @if (session('status'))

                {{ session('status') }}

        @endif
          <h3 class='content-centerr'>¡Bienvenido <b class="candy-c">{{ Auth::user()->name }}!</b></h3>
        <div id="tortas" class="container bgLightGrey content-center">
              <h3 class=''>Tu Perfil Rash!</h3>

                <div class="row">
                    <div class="col-md-4">
                        <div class="tortas-container">
                            <div class="tortas-details">
                                <h5></h5>

                            </div>
                            <img class="im img-fluid" src="/storage/{{Auth::user()->avatar}}" alt="avatar del usuario" >
                        </div>
                        <div class="candy">
                          Candy Avatar
                        </div>
                    </div>
                    <div class="col-md-4">
                      <div class="tortas-container">
                          <div class="portas-details">
                              <h4 class="btn badge badge-danger margintop-sm">{{ Auth::user()->name}}</h4>
                              <h4 class="btn badge badge-danger margintop-sm">{{ Auth::user()->email}}</h4>
                              <h4> <a href="/carrito" class="btn badge badge-primary margintop-sm ">Carrito</a></h4>
                              <p>Creado: {{ Auth::user()->created_at}}</p>
                          </div>
                            <img class="im img-fluid" src="/images/papel1.jpg" alt="Fondo Paper">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tortas-container">
                            <div class="portas-details">

                            </div>
                            <img class="im img-fluid" src="/images/carrito.png" alt="Fondo carrito" >
                        </div>
                    </div>
                </div>
                <p>
                    CandyRash se reserva todos los derechos de tu perfil
                </p>
        </div>
        <!----------------------------------------FIN SECCION Perfil------------------------------->


@endsection

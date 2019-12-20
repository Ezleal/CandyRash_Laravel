@extends('layouts/candy_index')

@section('main')


  <!---------------------------------------- FIN DE HEADER --------------------------------------------->


<!----------------------------------------INICIO  SECCION PRINCIPAL------------------------------->

<div class="d-none d-md-block">

    <section id="principal">
        <div class="container">
            <div class="content-center princip" >
                <h1 class="margintop-lg">Bienvenidos a Candy Rash</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.</p>
                    @auth
                      <a href="/perfil" class="btn badge badge-danger margintop-sm ">Mi Perfil</a>
              @else
                <a href="/login" class="btn badge badge-danger margintop-sm ">Ingresar</a>
                @endauth
            </div>
        </div>
    </section>
  </div>



    <!----------------------------------------FIN  SECCION PRINCIPAL------------------------------->


    <!----------------------------------------INICIO  PRODUCTOS------------------------------->


    <section id="productos">
        <div class="container-fluid">
            <div class="content-center">
                <h2>Golosinas <b class="candy">candy rash</b>  <b>- Productos originales y de calidad</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum. Suscipit expedita obcaecati
                    nesciunt error ut quidem autem.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="productos-container">
                        <div class="productos-details">
<div class="candy"><a href="/producto">Click Aqui</a></div>

                            <a href="/producto">
                                <h2>Color Rash</h2>
                            </a>
                            <a href="/producto">
                                <p>— Colores y sabores por donde los mires!!!</p>
                            </a>
                        </div>
                        <img src="/images/productos-01.jpg" class="img-fluid" alt="Producto 01">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="productos-container">

                        <div class="productos-details">
                            <div class="candy"><a href="/producto">Click Aqui</a></div>
                            <a href="/producto">
                                <h2>Rash Fruit Candy</h2>
                            </a>
                            <a href="/producto">
                                <p>— Nuestros clasicos productos frutales candy rash!!!</p>
                            </a>
                        </div>
                        <img src="/images/productos-02.jpg" class="img-fluid" alt="Producto 02">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="productos-container">
                        <div class="productos-details">
   <div class="candy"><a href="/producto">Click Aqui</a></div>

                            <a href="/producto">
                                <h2>Candy Gourmet</h2>
                            </a>
                            <a href="/producto">
                                <p>— Conoce las variedades mas originales de nuestros productos!!!</p>
                            </a>
                        </div>
                        <img src="/images/productos-03.jpg" class="img-fluid" alt="Producto 03">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="productos-container">
                        <div class="productos-details">
                              <div class="candy"><a href="/producto">Click Aqui</a></div>

                            <a href="/producto">
                                <h2>Frutos Rojos</h2>
                            </a>
                            <a href="/producto">
                                <p>— Mas de 100 variedades de productos frutales!!!</p>
                            </a>
                        </div>
                        <img src="/images/productos-04.jpg" class="img-fluid" alt="Producto 04">
                    </div>
                </div>
            </div>



            <!----------------------------------------FIN SECCION  PRODUCTOS------------------------------->



            <!----------------------------------------INICIO SECCION TORTAS------------------------------->


            <div class="text-center margintop-sm">
                <p class="">Queres empezar tu candy negocio?</p>
                <a href="/register" class="text-dark"><b>Tenemos lo que necesitas.</b></a>
            </div>
        </div>
    </section>

    <section id="tortas" class="bgLightGrey">
        <div class="container">
            <div class="content-center">
                <h2>Nuestras tortas <b class="candy">RASH!</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum. Suscipit expedita obcaecati
                    nesciunt error ut quidem autem.</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="tortas-container">
                        <div class="tortas-details">
                            <h5>Torta Candy "Avengers endgame"</h5>
                            <span class="by">by Nacho, Repostero Developer</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-instagram"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-youtube"></i></a></li>

                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                            </ul>
                        </div>
                        <img src="/images/torta1.jpg" class="img-fluid" alt="torta 1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tortas-container">
                        <div class="tortas-details">
                            <h5>Torta Candy "Elmo Rash"</h5>
                            <span class="by">by Eze, Repostero Developer</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-instagram"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-youtube"></i></a></li>

                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                            </ul>
                        </div>
                        <img src="/images/torta2.jpg" class="img-fluid" alt="torta 2">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tortas-container">
                        <div class="tortas-details">
                            <h5>Torta Candy "Minions Rash"</h5>
                            <span class="by">by Nico, Repostero Developer</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-instagram"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-youtube"></i></a></li>

                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                            </ul>
                        </div>
                        <img src="/images/torta3.jpg" class="img-fluid" alt="torta 3">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------------------------------------FIN SECCION TORTAS------------------------------->



    <!----------------------------------------INICIO SECCION PRECIOS------------------------------->

    <section id="pricing" class="divider">
        <div class="container">
            <div class="content-center">
                <h2>Precios dulces <b>para cada negocio</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum. Suscipit expedita obcaecati
                    nesciunt error ut quidem autem.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="pricing-container">
                        <div class="plans plan-light">
                            <h4>BASIC CANDY RASH!</h4>
                            <h2>$3200 <span>/ por mes</span></h2>
                            <h4>Basic pack incluye</h4>
                            <ul class="margintop-xs">
                              <li>Pack mensual de gomitas candy special</li>
                              <li>6 Pack de chocolates candy</li>
                              <li>2 Tortas personalizadas</li>
                              <li>1 Bandejas candy special (1 kgs)</li>
                            </ul>
                            <a href="#" class="btn btn-primary full-width margintop-sm">Contratar ahora</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pricing-container">
                        <div class="plans plan-dark">
                            <h4>FULL CANDY RASH!</h4>
                            <h2>$6000 <span>/ por mes</span></h2>
                            <h4>Full pack incluye</h4>
                            <ul class="margintop-xs">
                                <li>Pack mensual de gomitas candy special</li>
                                <li>12 Pack de chocolates candy</li>
                                <li>6 Tortas personalizadas</li>
                                <li>3 Bandejas candy special (3 kgs)</li>
                            </ul>
                            <a href="#" class="btn btn-primary full-width margintop-sm">Contratar ahora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!----------------------------------------FIN SECCION PRECIOS------------------------------->





    <!----------------------------------------INICIO SECCION TESTIMONIOS------------------------------->



    <section id="testimonial" class="divider">
        <div class="container">
            <div class="content-center">
                <h2>Opiniones de <b>nuestros clientes…</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.</p>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-container">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.
                            </p>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <img src="/images/torta5.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-9 col-9">
                                        <h6>Paulo Silas</h6>
                                        <span>DULCE VICTORIA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.</p>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <img src="/images/eljevi.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-9 col-9">
                                        <h6>Diego Capria</h6>
                                        <span>EL JEVI</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.</p>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <img src="/images/open25.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-9 col-9">
                                        <h6>Nestor Gorosito</h6>
                                        <span>OPEN 25</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <div class="control-button">
                        <i class="icon ion-md-arrow-back"></i>
                    </div>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <div class="control-button">
                        <i class="icon ion-md-arrow-forward"></i>
                    </div>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </section>

    <!----------------------------------------FIN  SECCION TESTIMONIOS------------------------------->



    <!----------------------------------------INICIO SECCION CONTACTO------------------------------->



    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 margintop-sm">
                    <h3>Buscas comenzar tu proyecto? <b class="candy">candy rush</b> <b> es lo que necesitás!</b></h3>
                    <p class="sm-head">
                    <span class="fa fa-location-arrow"></span>
                    Oficina Central
                  </p>
                  <p>Lima 1111, Caba.</p>

                  <p class="sm-head">
                    <span class="fa fa-phone"></span>
                    Telefono
                  </p>
                  <p>
                    0800-333-CANDY <br>

                  </p>

                  <p class="sm-head">
                    <span class="fa fa-envelope"></span>
                    Email
                  </p>
                  <p>
                    atencion@candyrash.com <br>
                    www.candyrash.com
                  </p>
                </div>
                <div class="col-md-6 margintop-sm">
                    <div class="row">
                      <form class="row" action="" method="post">

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Apellido">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control" id="" value="" name="email" placeholder="Email">
                                <p>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Nombre de empresa">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" class="form-control" id="" placeholder="Celular (optional)">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="" class="btn btn-primary full-width">Contactanos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!----------------------------------------FIN  SECCION CONTACTO------------------------------->
  @endsection

                                            <!-- Footer INICIO -->

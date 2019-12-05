@extends('layouts/candy_index')

@section('main')


    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-4 margintop-sm">

                </div>
                <div class="col-md-4 margintop-sm">
                    <div class="row">
                      <form class="row" action="" method="post">
                        <div class="col-md-12">

                          <p class="candy login">Ingresar</p>
                          <div class="form-group">
                              <input type="email" class="form-control" value=""  name="email" placeholder="Usuario">
                                <p></p>
                          </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" class="form-control" id="" name="password" placeholder="contraseña">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <p><input type="checkbox" class="" id="" value="Recuerdame" name="recuerdame"> Recordarme</p>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary full-width" name="button">Ingresar</button>
                        <p><a href="/register"><br>No tenes cuenta? registrate acá</a></p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 margintop-sm">

                </div>
            </div>

        </div>
    </section>
 @endsection

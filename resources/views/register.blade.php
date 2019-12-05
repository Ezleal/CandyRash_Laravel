@extends('layouts/candy_index')

@section('main')

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 margintop-sm">
                    <h3>Buscas comenzar tu proyecto? <b class="candy">candy rush</b> <b> es lo que necesitás!</b></h3>
                    <h4>Ya estas registrado? <a href="login">logeate!</a></h4>

                </div>
                <div class="col-md-6 margintop-sm">
                    <div class="row">
                    <form class="row" action="" method="post">

                        <div class="col-md-12">
                          <div class="form-group">
                              <input type="text" class="form-control" value="" id="" name="usuario" placeholder="Usuario">
                              <p></p>
                          </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control" id="" value="" name="email" placeholder="Email">
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" class="form-control" id="" name="password"  value="" placeholder="Contraseña">
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" class="form-control" id="" name="confirmar" placeholder="Confirme contraseña">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <p><input type="checkbox" class="" id="term" name="terminos"> Acepto términos y Condiciones</p>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary full-width" name="button">Registrarse</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

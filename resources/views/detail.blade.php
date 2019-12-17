@extends('layouts/candy_index')

@section('main')


  <section id="contact">
      <div class="container">
          <div class="row">
              <div class="col-md-4 margintop-sm">


              </div>
              <div class="col-md-4 margintop-sm">
                <div class="row">
                  <h2> Candy {{$detalle->title}}</h2>
                <form class="row" action="" method="post">
                  @csrf

                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="rating">Precio: $ </label>
                        {{$detalle->price}} x Unidad
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="awards">Stock: </label>
                        {{$detalle->stock}} Unidades
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="size">Peso: </label>
                        {{$detalle->size}} Grs
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="release_date">Publicado el: </label>
                        {{$detalle->release_date}}
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="categorie_id">Categoria: </label>
                        {{$detalle->getCategorieName()}}
                      </div>
                    </div>


                    <div class="col-md-12">
                        <button type="" class="btn btn-primary full-width" name="button" ><a href="/candys">Volver a Candys</a></button>
                    </div>
                    </form>
                  </div>

                </div>
                <div class="col-md-4 margintop-sm">

                </div>
            </div>
        </div>
    </section>

    @endsection

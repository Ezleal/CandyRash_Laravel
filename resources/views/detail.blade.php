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
                        <label for="rating">Rating: </label>
                        {{$detalle->rating}}
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="awards">Premios: </label>
                        {{$detalle->awards}}
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="length">Duracion: </label>
                        {{$detalle->length}}
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="release_date">Fecha de Lanzamiento: </label>
                        {{$detalle->release_date}}
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="genre_id">Genero: </label>
                        {{$detalle->getGenreName()}}
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

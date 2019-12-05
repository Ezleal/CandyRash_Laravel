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
                  @csrf

                    <div class="col-md-12">
                      <div class="form-group">
                          <input type="text" class="form-control" value="" id="title" name="title" placeholder="Titulo">
                          <p></p>
                      </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="rating" value="" name="rating" placeholder="Rating">
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="awards" name="awards"  value="Premios" placeholder="awards">
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="length" name="length" placeholder="Duracion">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="release_date" name="release_date" placeholder="Fecha De Lanzamiento">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group" placeholder="Genero">
                            <select class="form-control" name="genre_id" id="genre_id" >
                              <option value="">Elije Uno</option>
                        @foreach ($genres as $genre)
                            <option value={{$genre->id}}>{{$genre->name}}</option>
                        @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary full-width" name="button">Registrar Candy</button>
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

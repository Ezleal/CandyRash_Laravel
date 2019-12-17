@extends('layouts/candy_index')

@section('main')


  <div class="row">
  <div class="col-md-6 offset-md-3">
    <article class="nuevas" id="peliculas">
        <div class="peliculas">

              <h2>Modificación de Pelicula</h2>
              <form method="post" action="/candys/{{$candy->id}}" enctype="multipart/form-data">
                  @csrf
                  @method('patch')
                  <div class="form-group">
                    <label for="title">Titulo</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $candy->title)}}">
                    @error('title')
                        {{ $message }}
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="text" class="form-control " id="price" name="price" value="{{old('price', $candy->price)}}">
                    @error('price')
                        {{ $message }}
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="stock">Premios</label>
                    <input type="text" class="form-control" id="stock" name="stock"  value="{{old('stock', $candy->stock)}}">
                    @error('stock')
                        {{ $message }}
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="size">Peso</label>
                    <input type="text" class="form-control" id="size" name="size"  value="{{old('size', $candy->size)}}">
                    @error('title')
                        {{ $message }}
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="release_date">Fecha de Elaboración</label>
                    <input type="date" class="form-control" id="release_date" name="release_date"  value="{{old('release_date', $candy->releaseDate())}}">
                    @error('release_date')
                        {{ $message }}
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="categorie_id">Genero</label>
                    <select class="form-control" name="categorie_id" id="categorie_id">
                      <option value="">Elije uno</option>
                  @foreach ($categories as $categorie)
                      <option value="{{$categorie->id}}" @if($categorie->id == old('categorie_id', $candy->categorie_id)) selected @endif>{{$categorie->name}}</option>
                  @endforeach
                    </select>
                    @error('categorie_id')
                        {{ $message }}
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="photo">Foto</label>
                    <img src="/storage/{{$candy->photo}}" alt="" width="100%">
                    Para cambiar seleccione un nuevo archivo
                    <input type="file" id="photo" name="photo">
                    @error('photo')
                        {{ $message }}
                    @enderror
                  </div>
                  <a class="btn btn-secondary" href="/candys/">Volver</a>
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </form>

        </div>

    </article>
  </div>
  </div>
  @endsection

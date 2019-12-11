@extends('layouts/candy_index')

@section('main')

<section class="principal">
   <article class="nuevas" id="peliculas">
       <div class="peliculas">
          <div class="titulo-nav">
               <h3>Nuestros Dulces Candy Rash</h3>
               <div>

                 <a href="/candys/new" class="btn btn-primary">Nueva</a>

               </div>
         </div>
         <div class="sub-titulo">
             <div class="ordenamiento">
               <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?orden=title">Titulo</a></li>
                <li class="breadcrumb-item"><a href="?orden=genero">Genero</a></li>
                <li class="breadcrumb-item "><a href="?orden=rating">Rating</a></li>
                <li class="breadcrumb-item active"><a href="?orden=awards">Awards</a></li>
              </ol>
             </div>
             <nav >
               {{$peliculas->links()}}
             </nav>
         </div>

         <div class="">

                <div class="alert alert-">

                </div>

         </div>

         <div class="card-group">

          @foreach ($peliculas as $pelicula)

    <div class="card card-peli">
      <img class="fondo-peli" src="">
      <div class="card-header">{{$pelicula->title}}</div>
      <div class="card-body">

          <span class="card-title"></span>
          <form class="form-add-my-list" action="/my-list/" method="post">

              <button type="submit" class="no-button">
                  <img src="/storage/default.png" class="like" height="300px" width="300px">
              </button>
          </form>
          </a>
      </div>
      <div class="card-body">
        <p class="card-text">{{$pelicula->genre_id}}</p>
        <p class="card-text">Rating: {{$pelicula->rating}}</p>
        <p class="card-text">Awards: {{$pelicula->awards}} </p>
        <p class="card-text">
          <a class="btn btn-primary" href="/candys/{{$pelicula->id}}">Ver Mas</a>

          <a class="btn btn-success" href="/candys/edit">Editar</a>

          </p>
      </div>
    </div>

          </div>


       </div>

   </article>
</section>
@endforeach
<nav >
  {{$peliculas->links()}}
</nav>
  @endsection

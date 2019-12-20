@extends('layouts/candy_index_list')

@section('main')

<section class="content-centerc">
       <div class="candys content-centerc">
          <div class="titulo-nav">
               <h3>Carrito de {{Auth::user()->name}}</h3>
               {{-- <div>
              @if(Auth::user() && Auth::user()->admin)
                <br>
                 <a href="/ventas" class="btn btn-primary">Ver todas las ventas</a>
                 <br>
              @endif
               </div> --}}
         </div>
         <div class="sub-titulo">
             {{-- <div class="ordenamiento content-centerc">
               <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?orden=title">Titulo</a></li>
                <li class="breadcrumb-item"><a href="?orden=genero">Categoria</a></li>
                <li class="breadcrumb-item "><a href="?orden=rating">Precio</a></li>

              </ol>
             </div> --}}
             <nav >
               {{$listaproductos->links()}}
             </nav>
         </div>


         <div class="card-group content-centerc">
  <div class="col-md-12">
          @foreach ($listaproductos as $candy)
          @if ($candy->user_id == (Auth::user()->id))
  <div class="col-md-4">
    <div class="card content-centerc">
      <img class="fondo" src="">
      <div class="card-header">{{$candy->candy_id}}</div>
      <div class="card-body">

          <span class="card-title"></span>
          <form class="form-add-my-list" action="/my-list/" method="post">

              <button type="submit" class="no-button">
                  <img src="/images/default.png" class="like" height="300px" width="300px">
              </button>
          </form>
          </a>
      </div>
      <div class="card-body">
        {{-- <p class="card-text">Categoria: {{$candy->getCategorieName()}}</p> --}}
        <p class="card-text">Cantidad: {{$candy->cantidad}}</p>
        <p class="card-text">Subtotal: ${{$candy->subtotal}} </p>
        {{-- <p class="card-text">
          <a class="btn btn-danger" href="/candys/{{$candy->id}}">Ver Mas</a>
          @if(Auth::user() && Auth::user()->admin)
          <a class="btn btn-success" href="/candys/edit">Editar</a>
         @endif

          </p> --}}
      </div>
    </div>
  </div>
  </div>

          </div>


       </div>

   </article>
</section>
@endif
@endforeach
<nav class="content-center">
  {{$listaproductos->links()}}
</nav>
  @endsection

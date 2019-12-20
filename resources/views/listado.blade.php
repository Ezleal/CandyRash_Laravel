@extends('layouts/candy_index_list')

@section('main')

<section class="content-centerc">
       <div class="candys content-centerc">
          <div class="titulo-nav">
               <h3>Nuestros Dulces Candy Rash</h3>
               <div>
              @if(Auth::user() && Auth::user()->admin)
                <br>
                 <a href="/candys/new" class="btn btn-primary">Cargar Candy</a>

              @endif
               </div>
               <br>
         </div>
         <div class="sub-titulo">
             <div class="ordenamiento content-centerc">
               <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?orden=title">Titulo</a></li>
                <li class="breadcrumb-item"><a href="?orden=genero">Categoria</a></li>
                <li class="breadcrumb-item "><a href="?orden=rating">Precio</a></li>

              </ol>
             </div>
             <nav >
               {{$candys->links()}}
             </nav>
         </div>


         <div class="card-group content-centerc">

          @foreach ($candys as $candy)

    <div class="card content-centerc">
      <img class="fondo" src="">
      <div class="card-header">{{$candy->title}}</div>
      <div class="card-body">

          <span class="card-title"></span>
          <form class="form-add-my-list" action="/my-list/" method="post">

              <button type="submit" class="no-button">
                @if ($candy->proavatar)
                  <img src="/storage/{{$candy->proavatar}}" class="like" height="300px" width="300px">
                @else
                  <img src="/images/default.png" class="like" height="300px" width="300px">
                @endif
              </button>
          </form>
          </a>
      </div>
      <div class="card-body">
        <p class="card-text">Categoria: {{$candy->getCategorieName()}}</p>
        <p class="card-text">Stock: {{$candy->stock}} </p>
        <p class="card-text">
          <a class="btn btn-danger" href="/candys/{{$candy->id}}">Ver Mas</a>
          @if(Auth::user() && Auth::user()->admin)
          <a class="btn btn-success" href="/candys/edit/{{$candy->id}}">Editar</a>
         @endif

          </p>

        <form class="row" action="" method="post">
            <div class="col-md-12">
              <div class="form-group">
                  @csrf
                      @if (Auth::user())
                          <input type="hidden" value="{{Auth::user()->id}}" name="usuario" >
                      @else
                          <input type="hidden" value="0" name="usuario" >
                      @endif
                      <input type="hidden" class="form-control @error('producto') is-invalid @enderror" id="producto" value="{{$candy->title}}" name="producto" placeholder="">
                      <input type="hidden" value="{{$candy->id}}" name="id" >
                        <span class="invalid-feedback" role="alert">
                          <strong>@error('id') {{ $message }} @enderror</strong>
                        </span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                      <input type="text" class="form-control @error('productocantidad') is-invalid @enderror" id="productocantidad" value="1" name="productocantidad" placeholder="">
                        <span class="invalid-feedback" role="alert">
                          <strong>@error('productocantidad') {{ $message }} @enderror</strong>
                        </span>
              </div>
            </div>
            <div class="col-md-1">
              <p></p>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                      <input type="text" class="form-control" value="${{$candy->price}}" name="subtotal" readonly >
                        <span class="invalid-feedback" role="alert">
                          <strong>@error('subtotal') {{ $message }} @enderror</strong>
                        </span>
              </div>
            </div>
            <div class="col-md-4">

            </div>

            <div class="col-md-4">

                      <button type="submit" class="btn btn-primary full-width" name="button">{{ __('') }}Comprar</button>
            </div>
            <div class="col-md-4">

            </div>
        </form>
      </div>



    </div>

          </div>


       </div>

   </article>
</section>
@endforeach
<nav class="content-center">
  {{$candys->links()}}
</nav>
  @endsection

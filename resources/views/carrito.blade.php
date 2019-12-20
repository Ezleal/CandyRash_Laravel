@extends('layouts/candy_index_list')

@section('main')


       <div class="candys content-centerc">
         <h3>Carrito de {{Auth::user()->name}}</h3>
          <div class="titulo-nav">
               {{-- <div>
              @if(Auth::user() && Auth::user()->admin)
                <br>
                 <a href="/ventas" class="btn btn-primary">Ver todas las ventas</a>
                 <br>
              @endif
               </div> --}}
         </div>

<table>
  <?php $total = 0;  ?>
          @foreach ($listaproductos as $candy)
          @if ($candy->user_id == (Auth::user()->id))
            @if ($candy->eliminado == 1)
              @continue
            @endif
            @if ($candy->comprado == 1)
              @continue
            @endif

            <tr>
              <form class="" action="" method="post">
                <input type="hidden" class="form-control" value="{{$candy->id}}" name="id" readonly >
  {{-- <div class="col-md-4">
    <div class="card content-centerc"> --}}
      {{-- <img class="fondo" src=""> --}}
      <td>

          <img src="/images/default.png" class="like" height="70px" width="70px">

      </td>
      <td>

      <div class="card-header">
        <input type="text" class="form-control" value="{{$candy->producto}}" name="subtotal" readonly >
      </div>
      </td>
      <div class="card-body">
        <td>

        {{-- <p class="card-text">Categoria: {{$candy->getCategorieName()}}</p> --}}
        <p class="card-text">Cantidad:</p>
      </td>
      <td>

        <input type="text" class="form-control" value="{{$candy->cantidad}}" name="subtotal" readonly >
      </td>
      <td>

        <p class="card-text">Subtotal:</p>
        <?php $total = ($candy->cantidad*$candy->subtotal)+$total; ?>
      </td>
      <td>

        <input type="text" class="form-control" value="${{$candy->subtotal}}" name="subtotal" readonly >
      </td>
      <td>

        {{-- <input type="submit" class="form-control" value="Eliminar" name="" > --}}
        <a class="btn btn-success" href="/carrito/{{$candy->id}}">Eliminar</a>
      </td>
        {{-- <p class="card-text">
          <a class="btn btn-danger" href="/candys/{{$candy->id}}">Ver Mas</a>
          @if(Auth::user() && Auth::user()->admin)
          <a class="btn btn-success" href="/candys/edit">Editar</a>
         @endif

          </p> --}}
      </div>
    {{-- </div>
  </div> --}}
  {{-- </div> --}}

          {{-- </div> --}}


       </div>


     </form>
</tr>
@endif
@endforeach
<tr>
  <td><h3>Total:</h3></td>
  <td><h3>${{$total}}</h3></td>
  <td>

    <a class="btn btn-success" href="/compras/{{Auth::user()->id}}">Comprar</a>
  </td>
</tr>
</table>
{{-- <nav class="content-center">
  {{$listaproductos->links()}}
</nav> --}}
  @endsection

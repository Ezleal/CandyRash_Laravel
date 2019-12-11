@extends('layouts.app')

@section('content')


    <section class="product_description_area">
    		<div class="container">

</div>

</section>
<div class="container">
  <div class="row">
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
<div class="">
{{ Auth::user()->email}}
</div>
        You are logged in!
    </div>
    <h2>Bienvenido {{ Auth::user()->name }}!!!</h2>

   <div class="col-md-6 margintop-sm">

    <div class="col">
      <img src="/storage/{{ Auth::user()->avatar }}" alt="avatar del usuario" height="300px">
    </div>

       </div>
 
       </div>

    </div>
@endsection

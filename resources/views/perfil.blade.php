@extends('layouts/candy_index')

@section('main')



    <section class="product_description_area">
    		<div class="container">
    			<ul class="nav nav-tabs" id="myTab" role="tablist">
    				<li class="nav-item">
    					<a class="nav-link" id="home-tab" data-toggle="tab" href="/#perfil" role="tab" aria-controls="home" aria-selected="true">Perfil</a>
    				</li>
    				<li class="nav-item">
    					<a class="nav-link" id="profile-tab" data-toggle="tab" href="/#perfil" role="tab" aria-controls="profile"
    					 aria-selected="false">Compras</a>
    				</li>
    				<li class="nav-item">
    					<a class="nav-link" id="contact-tab" data-toggle="tab" href="/#perfil" role="tab" aria-controls="contact"
    					 aria-selected="false">Historial</a>
    				</li>

    			</ul>


</div>

</section>
<div class="container">
  <div class="row">
    <h2>Bienvenido!!!</h2>

   <div class="col-md-6 margintop-sm">

    <div class="col">
      <img src="avatars/" alt="avatar del usuario" height="300px">
    </div>

       </div>
 <div class="col-md-6 margintop-sm">


        <form class="" action="" method="POST" enctype="multipart/form-data">
          <label for="">Editar imagen de perfil</label>
          <br>
          <input type="file" name="avatar" value="">
          <p></p>
          <input type="text" name="usuario" value="">
          <br>
          <input type="submit" name="" value="Enviar">

        </form>



        <form class="" action="" method="GET">
 <div class="row">
          <div class="col-md-6 margintop-sm">

          <label for="">Nombre
          <input type="text" name="nombre" placeholder="nombre" value=""></label>
            </div>

          <div class="col-md-6 margintop-sm">
          <label for="">Apellido
          <input type="text" name="apellido" value=""></label>
           </div></div>
          <div class="row">

          <div class="col-md-6 margintop-sm">
          <label for="">Edad
          <input type="number" name="edad" value=""></label>
          </div>

          <div class="col-md-6 margintop-sm">
          <label for="">DNI
          <input type="number" name="dni" value=""></label>
            </div></div>
          <button type="submit" name="editar">    Editar   </button>

        </form>
      </div>
       </div>

    </div>
@endsection

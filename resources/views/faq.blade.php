@extends('layouts/candy_index')
@section('main')

<!--------------------------------------- INICIO DE FAQ ---------------------------------->

        <div class="accordion" id="accordionExample">



  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        </button>
      </h2>
    </div>


  </div>
  <!-- Fin FAQ  -->
   <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
¿Cómo comprar en Candy Rash?

        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur voluptatum, cum non. Laudantium deleniti maiores enim cum ex ad inventore vel. Sit illo tempore quos praesentium consectetur placeat non libero, quisquam culpa, tenetur unde, quia!</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, deserunt.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea omnis cumque dolores expedita placeat doloribus nostrum incidunt magni quia fugiat?</p>
      </div>
    </div>
  </div>
  <!-- Inicio FAQ -->

  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  ¿Cómo retirar tu compra Candy Rash?
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">

        <p><b>Envios Rash:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <p><b>Envíos OCA:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <p><b>Retiro Personalmente:</b> Te esperamos en Lima 1111, CABA.
        </p>
        <p align=center>          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3311393278627!2d-58.38386198476982!3d-34.621071280455006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ea8781cb%3A0x950feb519009506e!2sLima+1111%2C+C1073AAW+CABA!5e0!3m2!1ses!2sar!4v1556319128386!5m2!1ses!2sar" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </p>

      </div>
    </div>
  </div>
  <!------------------------------------------ Fin FAQ ------------------------------------------->
  <!----------------------------------------- Inicio FAQ------------------------------------------>


  <!-- Fin Pregunta 3 del FAQ. -->
  <!-- Inicio Pregunta 4 del FAQ. -->

  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Política de privacidad
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut autem in minima nemo adipisci illo, eum repellendus magni eligendi accusamus reprehenderit repudiandae, amet minus nam provident recusandae quibusdam laboriosam aspernatur maiores doloribus totam pariatur! Rerum.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum officiis totam nihil quos, nobis earum dicta error eius doloribus rem.</p>
      </div>
    </div>
  </div>
  <!-- Fin Pregunta 4 del FAQ. -->
<!-- iniCIO FAQ 5 -------------->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Política de devolución
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quibusdam neque ipsa distinctio possimus consectetur provident asperiores qui eveniet soluta, iusto blanditiis! Tenetur suscipit mollitia quia autem modi quas sapiente similique excepturi animi. Necessitatibus minus nemo cum ad, dolores libero alias molestias quibusdam, maxime voluptas iusto quia, consequatur ratione voluptates repudiandae dolorem! Obcaecati possimus dolor nihil numquam repellat fuga ipsa libero inventore id, voluptate esse alias quos perferendis, praesentium non necessitatibus itaque tempore suscipit minus quasi eligendi dicta! Ducimus quia laudantium dolorum sapiente, maxime, velit nihil, in vel officia alias cupiditate non totam neque minima suscipit esse numquam voluptatem vitae!</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat exercitationem, dolore, sed nihil repellendus quis, at quos aperiam sequi ullam atque illo natus. Distinctio assumenda itaque, ullam architecto sunt magni?</p>
      </div>
    </div>
  </div>

</div>

<!---------------------------------------------- FIN DE FAQ --------------------------------------------->
@endsection

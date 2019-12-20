
@extends('layouts/candy_index')

@section('main')
  <script type="text/javascript" src="/js/validation-reg.js"></script>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 margintop-sm">
                    <h3>Buscas comenzar tu proyecto? <b class="candy">candy rush</b> <b> es lo que necesitás!</b></h3>
                    <h4>Ya estas registrado? <a href="login">logeate!</a></h4>

                </div>
                <div class="col-md-6 margintop-sm">
                    <div class="row">
                    <form id="form-reg" enctype="multipart/form-data" method="post">
                          @csrf
                        <div class="col-md-12">
                          <div class="form-group">
                              <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="" name="name" placeholder="Usuario">
                            @error ('name')
              <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                          </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control @error ('email') is-invalid @enderror" id="" value="{{old('email')}}" name="email" placeholder="Email">
                                @error ('email')
                  <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" class="form-control @error ('password') is-invalid @enderror" id="" name="password"  value="" placeholder="Contraseña">
                                @error ('password')
                  <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirme contraseña">
                                @error('password_confirmation'){{$message}}@enderror

                            </div>

                        </div>
                        <div class="col-md-12">
                          <div class="custom-file">
                   <input type="file" class="custom-file-input @error('avatar') is-invalid @enderror" id="avatar" name="avatar">
                   <label name='avatar' class="custom-file-label" for="avatar">Seleccione una imagen (opcional)</label>
                   <div class="invalid-feedback">@error('avatar')
                       {{$message}}
                   @enderror</div>
                 </div>
                        <div class="col-md-12">
                            <div class="form-group">


                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary full-width" name="button">Registrarse</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

                            @endsection

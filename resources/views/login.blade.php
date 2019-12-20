@extends('layouts/candy_index')

@section('main')
  <script type="text/javascript" src="/js/validation-log.js"></script>


    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-4 margintop-sm">

                </div>
                <div class="col-md-4 margintop-sm">
                    <div class="row">
                      <form id="login" class="row" action="" method="post">
                        <div class="col-md-12">
                          <p class="candy login">Ingresar</p>
                          <div class="form-group">
                            @csrf
                              <input type="email" class="form-control @error('email') is-invalid @enderror" value="" id="email"  name="email" placeholder="Usuario">
                                <span class="invalid-feedback" role="alert">
                        <strong>@error('email') {{ $message }} @enderror</strong>
                    </span>
                          </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Contraseña">
                                  <span class="invalid-feedback" role="alert">
                      <strong>@error('password') {{ $message }} @enderror</strong>
                  </span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <p><input type="checkbox" value="remember" for="remember" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme  @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">¿Olvidaste Contraseña?</a>
                    @endif</p>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary full-width" name="button">{{ __('') }}Ingresar</button>

                        <p><a href="/register"><br>¿No tenes cuenta? Registrate acá</a> </p>

                        </div>

                    </div>
                </div>
                <div class="col-md-4 margintop-sm">

                </div>
            </div>

        </div>
    </section>
 @endsection

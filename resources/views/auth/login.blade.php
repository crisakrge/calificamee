@extends('layouts.app')

@section('content')
<style media="screen">

</style>
<div class="container" >
    <div class="row  right" style="width:40%; height:100%; display:flex; justify-content:center; flex-wrap:wrap;">

        <div class="col m12 " style="heigth:100%; display:flex; justify-content:center; align-items:center; flex-wrap:wrap;" >
            <div class="card col m12">
              <div class="col m12">
                <h5 class="navbar-brand  blue-text text-darken-1 col m12 center" href="{{ url('/') }}" style="font-family: 'Kaushan Script', cursive; font-size:3em;">
                    {{ config('app.name', 'Calificamee') }}
                </h5>
                <p style="padding: 20px; text-align: center;">Inicia para Calificar y ser calificado por tus cuates.</p>
                <hr>

              </div>
                <div class="card-content">
                    <div class="row">
                    <div class="col m12">
                        <form action="" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="input-field">
                            <input type="email" id="n_usuario" value="{{ old('n_usuario') }}" required autofocus>
                            <label for="n_usuario">Correo Electronico</label>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="input-field">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" value="{{old('password')}}"required>
                        </div>

                        <div class="input-field">
                          <button type="submit" name="button" class="btn blue right">Entrar</button>
                        </div>

                        <div class="input-field">
                          <label for=""><a href="{{url('/register')}}" class="green-text">Registrate Ahora es Gratis!</a></label>
                        </div>



                    </form>
                    </div>


                    </div>
                    <div class="row">
                      <div class="col m12">
                        <p>Comparte <b style="font-family: 'Kaushan Script', cursive;">Calificamee</b> en diferentes redes sociales para hacer crecer la comunidad ademas...</p>
                        <hr>
                      </div>
                      <div class="col m12">
                        <p>Descarga <b style="font-family: 'Kaushan Script', cursive;">Calificamee</b> en tu celular</p>
                      </div>

                      <div class="col m6" style="margin-top:20px;">
                        <img src="http://horizonte.blob.core.windows.net.optimalcdn.com/img/googlePlay.png" class="responsive-img" alt="">
                      </div>
                      <div class="col m6" style="margin-top:20px;">
                        <img src="https://www.gemmahervas.com/wp-content/uploads/2014/12/Disponible-en-el-app-store.png" class="responsive-img" alt="">
                      </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<div class="row" style="width:60%; height:100%; display:flex; justify-content:center; flex-wrap:wrap;">
  <div class="carousel">
    @for($i = 1; $i < 5; $i++  )
    <div class="col m12 ">
        <div class="card carousel-item">
          <div class="card-image" >
            <img src="images/prueba{{$i}}.jpg"  >
            <span class="card-title  black-text col m12" style="background-color: rgba(255,255,255,0.5)"><b></b></span>

            <div class="fixed-action-btn vertical click-to-toggle right" style="position:absolute; bottom:-5%;">
            <a class="btn-floating btn-large red">
              <i class="material-icons">menu</i>
            </a>
            <ul>
              <li><a class="btn-floating red center">5</a></li>
              <li><a class="btn-floating yellow darken-1 center">6</a></li>
              <li><a class="btn-floating yellow darken-3 center">7</a></li>
              <li><a class="btn-floating orange darken-3 center">8</a></li>
              <li><a class="btn-floating light-green lighten-1 center">9</a></li>
              <li><a class="btn-floating green center">10</a></li>
            </ul>
          </div>

          </div>

        </div>
    </div>
    @endfor
  </div>
  <div class="col m12" style="didplay:flex; justify-content:center; flex-wrap:wrap;">
    <div class="card col m12 grey darken-4" style="box-shadow:0 0 0 0 !important; margin:auto;">
      <div class="card-content white-text">
        <p class="center">Somos la aplicacion que te permite calificar numericamente las fotos de tus amigos, ademas entre mejor calicad@ estes podras tener el derecho de ser Miss Calificamee o Mr Calificamee Asi que toma tu celular pon tu mejor perfil y arriesgate a saber hasta donde puedes llegar</p>
      </div>

    </div>

  </div>
</div>







    </div>

@endsection

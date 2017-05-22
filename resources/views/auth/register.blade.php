@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row right " style="width:40%; height:100%; display:flex; justify-content:center; flex-wrap:wrap;">

              <div class="col m12 " style="heigth:100%; display:flex; justify-content:center; align-items:center; flex-wrap:wrap;" >


                  <div class="card col m12">
                      <div class="card-content">
                        <div class="col m12">
                          <h5 class="navbar-brand  blue-text text-darken-1 col m12 center" href="{{ url('/') }}" style="font-family: 'Kaushan Script', cursive; font-size:3em;">
                              {{ config('app.name', 'Calificamee') }}
                          </h5>
                          <p style="padding: 20px; text-align: center;">Registrate para Calificar y ser calificado por tus cuates.</p>
                          <hr>

                        </div>
                          <div class="row">
                          <div class="col m12">
                              <form action="" role="form" method="POST" action="{{ route('register') }}">
                              {{ csrf_field() }}

                              <div class="input-field">
                                <label for="name">Nombre de Usuario</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                              </div>

                              <div class="input-field">
                                <label for="mail">Correo electronico</label>
                                <input id="mail" type="email" name="email" value="{{ old('mail') }}" required autofocus>
                              </div>

                              <div class="input-field">
                                <select class="" name="">
                                  <option value="">Seleccionar Uno</option>
                                  <option value="Hombre">Hombre</option>
                                  <option value="Mujer">Mujer</option>
                                  <option value="Otro">Otro</option>
                                </select>
                                <label for="">Selecciona sexo</label>

                              </div>

                              <div class="input-field">
                                <label for="password">Contraseña</label>
                                <input id="password" type="text" name="password" value="{{ old('password') }}" required autofocus>
                              </div>

                              <div class="input-field">
                                <label for="pin">Pin de acceso</label>
                                <input id="pin" type="text" name="pin" value="{{ old('pin') }}" required autofocus>
                              </div>

                                              <div class="input-field">
                                                <button type="button" name="button" class="btn blue right" style="border:0; border-radius:0;">Calificar</button>
                                              </div>

                                              <div class="input-field">
                                                <a href="/login">Ya tengo una Cuenta</a>
                                              </div>



                          </form>
                          </div>

                          </div>

                      </div>
                  </div>
              </div>
          </div>


          <div class="row right" style="width:60%; height:100%; display:flex; justify-content:center; flex-wrap:wrap;">
            <div class="carousel col m12">
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

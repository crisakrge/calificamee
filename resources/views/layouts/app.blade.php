<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Questrial" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->




    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
        @include('layouts.navbar')
        @yield('content')


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
        <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<style media="screen">
html{
  height: 100%;
  background-color: #f1f8e9;
}
body{
  height: 100%;
  margin: 0;
  background-color:  #f1f8e9;
}
input[type=text]:focus:not([readonly]),
input[type=email]:focus:not([readonly]),
input[type=password]:focus:not([readonly])
{
  border-bottom: 1px solid #00bcd4 !important;
  box-shadow: 0 1px 0 0 #00bcd4 !important;
}

.dropdown-content li>a, .dropdown-content li>span {
  color: #01579b;
}
</style>

      <script type="text/javascript">
      $(document).ready(function() {
$('select').material_select();
$('.carousel').carousel();
});
      </script>

</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- Scripts -->

       <!-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}

        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>-->

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        {{-- <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                        <a href="{{ url('/juego') }}" class="text-sm text-gray-700 underline">Juego</a>
                        <a href="{{ url('/puntaje') }}" class="text-sm text-gray-700 underline">Puntaje</a> --}}
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            

            <!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-red w3-card w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      @if (Route::has('login'))
      <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
          @auth
              {{-- <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Home</a>        
              <a href="{{ url('/juego') }}" class="text-sm text-gray-700 underline">Juego</a>
              <a href="{{ url('/puntaje') }}" class="text-sm text-gray-700 underline">Puntaje</a> --}}

          @else
              <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

              @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
              @endif
          @endauth
      </div>
  @endif
    </div>
  
    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Home</a>
                <a href="{{ url('/juego') }}" class="text-sm text-gray-700 underline">Juego</a>
                <a href="{{ url('/puntaje') }}" class="text-sm text-gray-700 underline">Puntaje</a>

            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    </div>
  </div>
   <!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
    <h1 class="w3-margin w3-jumbo">FRIENDSHIP</h1>
    <p class="w3-xlarge">Bienvenido a Nuestro Juego</p>
    {{-- <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Jugar!</button> --}}
    <a href="{{ url('/juego') }}"  class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Jugar</a>
  </header>
  <!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-twothird">
        <h1>Bienvenido a FriendShip</h1>
        <h5 class="w3-padding-32">Este es un juego desarrollado por el grupo 2 del Carrera de Desarrollo de Software Sexto Nivel.</h5>
  
        <p class="w3-text-grey"> En la actualidad existen diferentes herramientas para el desarrollo de videojuegos de diferente índole: Motores de desarrollo de juegos, software para la creación de arte 2d, software para la creación de arte 3D, etc. Los videojuegos han extendido la experiencia de juego de la consola a los dispositivos móviles, estos son programas electrónicos que involucran la interacción de una o más personas con una máquina o interfase que genera gráficos.
            </p>
      </div>
  
      <div class="w3-third w3-center">
        <img src="data:image/jpeg;base64,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" >
      </div>
    </div>
  </div>
  
  <!-- Second Grid -->
  <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-third w3-center">
        <img src="  http://assets.stickpng.com/images/5f539494060f2e0004858082.png" width="250px" height="250px">
      </div>
  
      <div class="w3-twothird">
        <h1>Juega con tu amigos!</h1>
        <h5 class="w3-padding-32">Compite por tener mas puntaje.</h5>
  
        <p class="w3-text-grey">“Friendship”, este permitirá al jugador aprender a evitar obstáculos y eso ayudará a su parte motriz.</p>
      </div>
    </div>
  </div>

 <!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
    <div class="w3-xlarge w3-padding-32">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
   </div>
   <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>
  
            
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <!-- Codificación de carácteres con los que vamos a escribir la página -->
      <meta charset="utf-8">

      <!-- Hacemos nuestra página responsive -->
      <meta name="viewport" content="width=device-width,initial-scale=1">

      <!-- Ponemos el favicon = ponemos el logo en el navegador-->
      <link rel="shortcut icon" href="https://www.youtube.com/s/desktop/12d6b690/img/favicon.ico">

      <!-- Título que le vamos a dar a la página, esto lo lee Google -->
      <title>Título</title>

      <!-- Le damos la descripción de la web, esto lo lee Google -->
      <meta name="description" content="descripción de la web, se recomienda 90 caracteres">

      <!-- Las keywords han quedo obsoletas en su proposito de SEO -->
      <meta name="keywords" 	 content="palabras clave, separadas, por comas">

      <!-- El propositio de estas líneas es para cuando se envía nuestro enlace a través de redes sociales.
          Le damos la descripción y título de la web y establecemos las propiedades para el SEO -->
      <meta property="og:type"        content="website" />
      <meta property="og:title"       content="Título" />
      <meta property="og:description" content="descripción de la web, se recomienda 90 caracteres" />
      <meta property="og:image"       content="https://www.youtube.com/s/desktop/12d6b690/img/favicon_144.png" />
      
       <!-- Establecemos las tipografías que usaremos -->
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

      <!-- Enlazamos con la página de CSS -->
      @vite(['resources/sass/app.scss', 'resources/js/app.js'])
      
    </head>


    <body>

        @include('admin.layout.partials.header')

        <main>
            @yield('content')
        </main>
    </body>
</html>
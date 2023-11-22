<!DOCTYPE html>
<html lang="en">
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
      <link rel="stylesheet" href="/style/style.css">

      <!-- Enlazamos con la página de JS -->
      <script type="module" src="js/app.js"></script>
    </head>


    <body>
        <header>

            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13 2V3H12V9H11V10H9V11H8V12H7V13H5V12H4V11H3V9H2V15H3V16H4V17H5V18H6V22H8V21H7V20H8V19H9V18H10V19H11V22H13V21H12V17H13V16H14V15H15V12H16V13H17V11H15V9H20V8H17V7H22V3H21V2M14 3H15V4H14Z" /></svg>
            </div>

            <div class="burger-menu">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg>
            </div>

        </header>

        <main>
            @yield('content')
        </main>
    </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION-TACHE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <div class="container mt-4">
        <h1 class="text-center">Identification d'accès</h1>
        <p>Salut , professeur <strong>{{ $name }}  {{ $prenoms }}</strong> votre mot de passe pour l'accès à la plateforme de gestion de l'université pour vos informations est <strong>{{  $mot_passe  }}</strong></p>
        <p>Veuillez garder le mot de passe de manière confidentiel.</p>
        <p>Vous pouvez nous contacter au <strong>(+225 01 72 42 60 87 )</strong> pour toutes préoccupastions. </p>
        <p><strong>NB:</strong>Une mauvaise attitude ou en cas d'indiscipline , vous n'aurez plus d'accès à la plateforme</p>
        <p>L'administration vous remercie .</p>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  <style>
    .container{
      font-family:  Times, serif;
      font-size: 20px;
    }
  </style>
</html>


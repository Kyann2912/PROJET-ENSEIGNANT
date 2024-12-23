<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Audit des Activités sur la Plateforme</title>
    
    <!-- Styles CSS -->
    <style>
  body {
    margin: 0;
    padding: 0;
    font-family: 'Times New Roman', Times, serif;
    font-size: 14px; /* Réduction de la taille de police */
  }

  h1 {
    text-align: center;
    font-weight: bold;
    margin-top: 10px; /* Réduction de la marge */
    font-size: 20px; /* Taille plus petite */
  }

  hr {
    width: 80%;
    margin: 5px auto; /* Réduction des marges */
    border: 1px solid #000;
  }

  .table-container {
    margin: 10px auto; /* Réduction des marges */
    width: 95%; /* Réduction de la largeur */
    overflow-x: auto;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px; /* Taille de police pour le tableau */
    background-color: white;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 6px; /* Réduction du padding */
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }

  .footer {
    text-align: center;
    margin-top: 10px; /* Réduction de la marge */
    font-size: 12px;
  }

  /* Style pour l'impression */
  @media print {
    body {
      zoom: 90%; /* Ajustez le zoom si nécessaire pour tout inclure */
    }
  }
</style>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9179c9d0f1.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <img src="font/L.jpeg" alt=""  width="120px" heigth="80px" >
    <br>
    <br>

    <div class="container">
        <header class="A">
            <h1 style="color:blue";>AUDIT DES ACTIVITES SUR LA PLATEFORME</h1>
            <hr>
        </header>
        <br>

        <!-- Tableau des Activités -->
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Fonctionnalités</th>
                        <th>Ajouter</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                        <th>Email Reçu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Gestion des Utilisateurs</td>
                        <td>{{ $utilisateur }}</td>
                        <td>2</td>
                        <td>{{ $uti_supprimer }}</td>
                        <td>Null</td>
                    </tr>
                    <tr>
                        <td>Gestion des Occupations</td>
                        <td>{{ $salle }}</td>
                        <td>2</td>
                        <td>2</td>
                        <td>Null</td>
                    </tr>
                    <tr>
                        <td>Gestion des Filières</td>
                        <td>{{ $filiere }}</td>
                        <td>2</td>
                        <td>2</td>
                        <td>Null</td>
                    </tr>
                    <tr>
                        <td>Gestion des Paiements</td>
                        <td>{{ $paiement }}</td>
                        <td>2</td>
                        <td>2</td>
                        <td>Null</td>
                    </tr>
                    <tr>
                        <td>Gestion des Emplois du Temps</td>
                        <td>{{ $emploi }}</td>
                        <td>2</td>
                        <td>2</td>
                        <td>Null</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>Null</td>
                        <td>Null</td>
                        <td>Null</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <p style="margin-left:50px;margin-top:550px";>Générer le <strong>{{ $date }}</strong></p>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>

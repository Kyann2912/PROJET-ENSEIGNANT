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
        /* background-color: blanchedalmond; */
        font-family: 'Times New Roman', Times, serif;
      }

      .yann a{
        margin-left:80px;
      }

      h1 {
        text-align: center;
        font-weight: bold;
        margin-top: 40px;
        font-size: 24px;
      }

      hr {
        width: 80%;
        margin: 0 auto;
        border: 1px solid #000;
        margin-left:30px;
      }

      .table-container {
        margin: 20px auto;
        width: 90%;
        overflow-x: auto;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
        font-size: 16px;
      }

      th {
        background-color: #f2f2f2;
        font-weight: bold;
      }



      .footer {
        text-align: center;
        margin-top: 40px;
        font-size: 16px;
      }
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9179c9d0f1.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <!-- Contenu principal -->

    <div class="container">
        <header class="A">
            <h1 style="color:blue";>AUDIT DES ACTIVITES SUR LA PLATEFORME</h1>
            <hr style="margin-left:20px";>
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
                        <td>❌</td>
                    </tr>
                    <tr>
                        <td>Gestion des Occupations</td>
                        <td>{{ $salle }}</td>
                        <td>2</td>
                        <td>2</td>
                        <td>❌</td>
                    </tr>
                    <tr>
                        <td>Gestion des Filières</td>
                        <td>{{ $filiere }}</td>
                        <td>2</td>
                        <td>2</td>
                        <td>❌</td>
                    </tr>
                    <tr>
                        <td>Gestion des Paiements</td>
                        <td>{{ $paiement }}</td>
                        <td>2</td>
                        <td>2</td>
                        <td>❌</td>
                    </tr>
                    <tr>
                        <td>Gestion des Emplois du Temps</td>
                        <td>{{ $emploi }}</td>
                        <td>2</td>
                        <td>2</td>
                        <td>❌</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>❌</td>
                        <td>❌</td>
                        <td>❌</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="yann"> 
        <a href="/rapport" class="btn btn-danger" style="margin-lef:100px";>TELECHAGER LE RAPPORT</a> <a href="/tableau" class="btn btn-dark">TABLEAU DE BORD</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>

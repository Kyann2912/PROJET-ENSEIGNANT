<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9179c9d0f1.js" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="Tout">
        <div class="A">
            <br>
            <h1>AUDIT  DES ACTIVITES SUR LA PLATEFORME</h1>
            <hr>
        </div>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Fonctionnalités</th>
                    <th>Ajouter</th>
                    <th>Modifiier</th>
                    <th>Supprimer</th>
                    <th>Email Recu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Gestion des utilisateurs</td>
                    <td>{{ $utilisateur }}</td>
                    <td>2</td>
                    <td>2</td>
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
                    <td>Gestion des Emplois du  Temps</td>
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
        <div>
        <a href="" class="btn btn-danger">TELECARGER</a> <a href="/tableau" class="btn btn-dark">DASHBOARD</a>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  <style>
    body{
        margin: 0px;
        padding: 0px;
        background-color: blanchedalmond;
        font-family:  Times, serif;


    }
    .ensemble{
        display: flex;
    }
    .table th{
        background-color: blanchedalmond;

    }
    .table{
        color: white;
        margin-left: 10px;
        position: fixed;

    }
    .table td{
        background-color: blanchedalmond;
        font-size: 18px;

    }

    .A h1{
        margin-bottom: 20px;
        margin-left: 400px;
        font-family:  Times, serif;
        font-weight: bold;
        font-size: 20px;
        margin-bottom: 10px;

    }
    .A a{
        text-decoration: none;
        width: 300px;
        height: 40px;
        border: 1px solid;
        padding: 5px;
        border-radius: 3px;
        border-color: rgb(4, 238, 234);
        color: black;
        margin-left: 10px;
        font-family:  Times, serif;
        font-size: 20px;
        background-color: white;
    }
    .form-control{
        width: 300px;
        margin-left: 60px;
        margin-bottom: 0px;
        height: 40px;
    }

    .btn{
        margin-left: 10px;
        margin-top: 350px;
        font-family:  Times, serif;
        font-size: 20px;
    }


    </style>
</html>
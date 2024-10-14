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
            <h1>LISTE DES FILIERES</h1>
            <hr>
            <a href="/filiere" class="btn btn-success" style="width: 350px;margin-left: 10px; height: 40px;">AJOUTER UNE FILIERE</a>
            <a href="/tableau" class="btn btn-success" style="width: 150px;margin-left: 60px; height: 40px;">DASHBOARD</a>
            <!-- <a href="/filiere.html" class="">AJOUTER UNE FILIERE</a> -->
        </div>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Departement</th>
                    <th>Nom-Filière</th>
                    <th>Responsable</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <td>1</td>
                <td>Alpha</td>
                <td>IGL-L3</td>
                <td>10/10/2020</td>
                <td><a href="" class="btn btn-info">MODIFIER</a> <a href="" class="btn btn-danger">SUPPRIMER</a></td>
            </tbody>
        </table>

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
    .table th{
        background-color: blanchedalmond;

    }
    .table{
        color: white;
        margin-left: 10px;

    }
    .table td{
        background-color: blanchedalmond;
        font-size: 18px;

    }

    .A h1{
        margin-bottom: 20px;
        margin-left: 500px;
        font-family:  Times, serif;
        font-weight: bold;
        font-size: 20px;
        margin-bottom: 10px;

    }
    .A a{
        text-decoration: none;
        width: 200px;
        height: 30px;
        border: 1px solid;
        padding: 3px;
        border-radius: 3px;
        border-color: rgb(4, 238, 234);
        color: black;
        margin-left: 490px;
        font-family:  Times, serif;
        font-size: 20px;
        background-color: white;
    }








    </style>
</html>
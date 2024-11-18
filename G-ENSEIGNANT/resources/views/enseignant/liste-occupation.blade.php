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
            <h1>LISTE DES OCCCUPATIONS</h1>
            <hr>
            <a href="/occupation" class="btn btn-success" style="width: 350px;margin-left: 10px; height: 40px;">AJOUTER UNE OCCCUPATION</a>
            <a href="tableau" class="btn btn-success" style="width: 150px;margin-left: 60px; height: 40px;">DASHBOARD</a>
        </div>
        <br>
        <table class="table">
        @if(session('message'))
            <div class="alert alert-success" role="alert" style="margin:20px;">
                {{ session('message') }}
            </div>
        @endif
        @if(session('supprimer'))
            <div class="alert alert-success" role="alert" style="margin:20px;">
                {{ session('supprimer') }}
            </div>
        @endif
        @if(session('modifier'))
            <div class="alert alert-success" role="alert" style="margin:20px;">
                {{ session('modifier') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-success" role="alert" style="margin:20px;">
                {{ session('error') }}
            </div>
        @endif
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom-Salle</th>
                    <th>Occupation</th>
                    <th>Date</th>
                    <th>Heures</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $yann = 1;
                @endphp
                @foreach($occupations as $occupation)
                 <tr>
                  <td>{{  $yann  }}</td>
                  <td>{{  $occupation->nom_salle  }}</td>
                  <td>{{  $occupation->occupation  }}</td>
                  <td>{{  $occupation->date_occupation  }}</td>
                  <td>{{  $occupation->heure  }}</td>
                  <td><a href="/modifier/occupation/{{ $occupation->id }}" class="btn btn-info">MODIFIER</a> <a href="/supprimer/occupation/{{  $occupation->id  }}" class="btn btn-danger">SUPPRIMER</a></td>
                </tr>
                @php
                    $yann++;
                @endphp
                @endforeach



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
        position: fixed;

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
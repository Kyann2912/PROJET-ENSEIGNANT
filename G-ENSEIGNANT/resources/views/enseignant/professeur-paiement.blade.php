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
            <h1>MES PAIEMENTS</h1>
            <hr>
            <div class="ensemble">
                <a href="/professeur" class="btn btn-success" style="width: 150px;margin-left: 60px; height: 40px;">DASHBOARD</a>  <a href="/impression" class="btn btn-info">IMPRIMER</a>
            </div>

        </div>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Numéro</th>
                    <th>Filière-Niveau</th>
                    <th>Cours</th>
                    <th>Nbre-Heures</th>
                    <th>Montant/Heures</th>
                    <th>Montant Total</th>

                    <!-- <th>Actions</th> -->
                </tr>
            </thead>
            @php
                $yann = 1;
            @endphp
            <tbody>
                    @foreach($paiements as $paiement)
                        <tr>
                            <td>{{ $yann  }}</td>
                            <td>{{ $paiement->filiere_niveau }}</td>
                            <td>{{ $paiement->cours }}</td>
                            <td>{{ $paiement->nbre_heures }}</td>
                            <td>{{ $paiement->montant_heure }}</td>
                            <td>{{ $paiement->montant_total }}</td>

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
        /* position:fixed; */


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
        margin-left: 500px;
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


    </style>
</html>
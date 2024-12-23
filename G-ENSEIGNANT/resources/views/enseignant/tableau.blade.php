<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9179c9d0f1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
  <body>
    <div class="Tout">
        <div class="A">
            <h1>Tableau de Bord</h1> <br>
            <img src="font/Image.jpg" alt="" width="60px"> <p class="nom" >{{ $nom }} {{ $prenoms }}</p>
            <br>
            <br>
            <br>
            <img src="font/Image.jpg" alt="" width="30px" style="margin-top:13px"><a href="/liste-utilisateurs">GESTION DES UTILISATEURS</a> <br>
            <img src="font/O.jpg" alt="" width="30px" style="margin-top:15px"><a href="/liste-occupations">GESTION DES OCCCUPATIONS</a> <br>
            <img src="font/P.jpg" alt="" width="30px" style="margin-top:15px"><a href="/liste-paiements">GESTION DES PAIEMENTS</a> <br>
            <img src="font/Y.jpg" alt="" width="30px" style="margin-top:15px"><a href="/liste-filieres">GESTION DES FILIERES</a> <br>
            <img src="font/E.jpg" alt="" width="30px" style="margin-top:15px"><a href="/liste-emplois">GESTION  EMPLOIS DU TEMPS</a> <br>
            <img src="font/A.jpg" alt="" width="30px" style="margin-top:15px"><a href="/audit">AUDIT DES OPERATIONS</a> <br>

            <br>
            <div class="logout">
                <a href="/deconnexion/utilisateur">DECONNEXION</a>
            </div>

        </div>
        <div class="MM">
            <p>UTILISATEURS</p>
            <h1 class="user-count" style="color:green">{{ $utilisateur }}</h1>
        </div>
        <div class="MA">
            <p>OCCCUPATIONS</p>
            <h1 class="user-count" style="color:green">{{ $salle }}</h1>
        </div>
        <div class="MB">
            <p>PAIEMENTS</p>
            <h1 class="user-count" style="color:green">{{ $paiement }}</h1>
        </div>
        <div class="MC">
            <p>FILIERES</p>
            <h1 class="user-count" style="color:green">{{ $filiere }}</h1>
        </div>
        <div class="MD">
            <p>EMPLOI</p>
            <h1 class="user-count" style="color:green">{{ $emploi }}</h1>
        </div>

        <div class="stat">
            <div style="width: 620px;height: 340px; margin-left: auto; margin-right: auto;">
                <canvas id="myPieChart"></canvas>
            </div>
        </div>
        
        <script>
            const ctx = document.getElementById('myPieChart').getContext('2d');
            const data = {
            labels: @json($data['labels']),
        };
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: data.labels,
                    datasets: [{
                        data: @json($data['values']),
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0','black']
                    }]
                }
            });
        </script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  <style>
    body{
        margin: 0px;
        padding: 0px;
    }
    .Tout{
        display: flex;
    }
    .A{
        padding-left: 0px;
        background-color: aliceblue;
        width: 388px;
        height: 551px;
    }


  .MM {
    text-align: center;
    font-family: Times, serif;
    margin-top: 5px;
    margin-left:10px;
    display: inline-block;
    padding: 10px;
    border: 2px solid rgba(3, 114, 250, 0.3);
    border-radius: 8px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    color: rgba(68, 107, 155, 0.99);
    font-size: 24px;
    font-weight: bold;
    height: 110px;
  }


  .MA {
    text-align: center;
    font-family: Times, serif;
    margin-top: 5px;
    margin-left:10px;
    display: inline-block;
    padding: 10px;
    border: 2px solid rgba(3, 114, 250, 0.3);
    border-radius: 8px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    color: rgba(68, 107, 155, 0.99);
    font-size: 24px;
    font-weight: bold;
    height: 110px;
  }

  .MB {
    text-align: center;
    font-family: Times, serif;
    margin-top: 5px;
    margin-left:10px;
    display: inline-block;
    padding: 10px;
    border: 2px solid rgba(3, 114, 250, 0.3);
    border-radius: 8px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    color: rgba(68, 107, 155, 0.99);
    font-size: 24px;
    font-weight: bold;
    height: 110px;
  }


  .MC {
    text-align: center;
    font-family: Times, serif;
    margin-top: 5px;
    margin-left:10px;
    display: inline-block;
    padding: 10px;
    border: 2px solid rgba(3, 114, 250, 0.3);
    border-radius: 8px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    color: rgba(68, 107, 155, 0.99);
    font-size: 24px;
    font-weight: bold;
    height: 110px;
  }

  .MD {
    text-align: center;
    font-family: Times, serif;
    margin-top: 5px;
    margin-left:10px;
    display: inline-block;
    padding: 10px;
    border: 2px solid rgba(3, 114, 250, 0.3);
    border-radius: 8px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    color: rgba(68, 107, 155, 0.99);
    font-size: 24px;
    font-weight: bold;
    height: 110px;
  }


    .A h1{
        margin-left: 30px;
        font-family:  Times, serif;
        font-weight: bold;
        font-size: 35px;

    }
    .A select{
        margin-left: 40px;
        width: 290px;
        height: 40px;
        font-family:  Times, serif;



    }
    .A a{
        padding: 5px;
        font-family:  Times, serif;
        font-size: 20px;
        line-height: 2.5;
        text-decoration: none;
        font-weight: bold;
        margin-left:30px ;

    }
    .X:hover {
        background-color: blanchedalmond;
        color: black;

    }


    hr{
        border: 2px solid;
        margin-left: 0px;
        font-weight: bold;
    }
    .logout a{
        background-color: rgba(145, 2, 2, 0.827);
        color: white;
        width: 200px;
        border-radius: 5px;
    }

    .F {
        font-family:  Times, serif;
        font-size: 20px;
        font-weight: bold;
        display: flex;
        line-height: 0.3;
        padding-top: 10px;
        background-color: aliceblue;
        width: 990px;
        height: 200px;

    }
    .V{
        margin-left: 130px;
        margin-top: 28px;
    }

    .VL{
        margin-left: 130px;


    }
    .XC{
        margin-top: 20px;
    }



    .YANNO{
        display: flex;
    }

    .KL{
        margin-left: 270px;
    }

    .espace h1{
        margin-top: 10px;
    }

    .stat {
        margin-left: 350px; 
        padding-left: 280px;
        margin-top: 200px;
        position: fixed;
        padding-bottom: 20px;
        box-shadow: 24cm;
    }

    img{
        margin-left:5px;
        position: fixed;
        border-radius:15px;

    }
    .nom{
        position: fixed;
        margin-left:80px;
        font-family:  Times, serif;
        font-size: 20px;
        margin-top:15px;
        font-weight: bold;
    }

    













    </style>
    
</html>
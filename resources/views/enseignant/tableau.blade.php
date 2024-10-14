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
            <h1>DAHSBOARD</h1> <br>
            <hr>


            <a href="/inscription">GESTION DES UTILISATEURS</a> <br>
            <a href="/occupation">GESTION DES OCCCUPATIONS</a> <br>
            <a href="/paiement">GESTION DES PAIEMENTS</a> <br>
            <a href="/filiere">GESTION DES FILIERES</a> <br>
            <a href="/emploi-temps">GESTION DES EMPLOI DU TEMPS</a> <br>
            <br>
            <br>
            <div class="logout">
                <a href="/connexion">DECONNEXION</a>
            </div>



        </div>

        <div class="F">
            <div>
                <p>UTILISATEURS  <h1 style="margin-left: 10px;color: rgba(145, 2, 2, 0.827);">0</h1></p>
                <br>
                <p class="XC" >PAIEMENTS <h1 style="margin-left: 10px;color: rgba(145, 2, 2, 0.827);">0</h1></p>
            </div>

            <div >
                <div class="YANNO">
                <p class="VL">OCCCUPATIONS <h1 style="margin-left: -150px;color: rgba(145, 2, 2, 0.827); margin-top: 20px;">0</h1> </p>
                <br>
                <div class="espace">
                    <p class="KL">EMPLOI DU TEMPS  </p><br>
                    <h1 style="margin-left: 310px;color: rgba(145, 2, 2, 0.827);margin-top: -10px;">0</h1>
                </div>
 
                <br>
                </div>
                <br>
                <p class="V">FILIERES <h1 style="margin-left: 140px;color: rgba(145, 2, 2, 0.827);">0</h1> </p>
                <br>

            </div>

        </div>
        <div class="stat">
            <div style="width: 620px;height: 340px; margin-left: auto; margin-right: auto;">
                <canvas id="myPieChart"></canvas>
            </div>
        </div>
        
        <script>
            const ctx = document.getElementById('myPieChart').getContext('2d');
            const data = {
            labels: ['Utilisateurs', 'Occupations', 'Paiements', 'Filières','Emploi du Temps'],
            values: [10, 20, 30, 40,34] // Mettez ici vos propres valeurs
        };
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: data.labels,
                    datasets: [{
                        data: data.values,
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
        width: 370px;
        height: 551px;
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
        margin-left:5px ;

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
        /* border:2px double; */
        /* border-radius:2px; */
        /* border-color:aliceblue; */
        margin-top: 200px;
        position: fixed;
        padding-bottom: 20px;
        box-shadow: 24cm;
    }













    </style>
</html>
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
            <h1>Information de  l'Utilisateur </h1> <br>
            <br>
            <p>Nom</p> <br>
            <p>Prenoms</p> <br>
            <p>Email</p> <br>
            <p>Role </p> <br>




        </div>
        <div class="B">

            <h1 style="margin-top: 200px;font-weight: bold;">Welcome Admin !</h1>
            <p>Vous voulez consulter la liste des utilisateurs  ?</p>
            <a href="/liste-utilisateurs">Consulter</a> 
            <!-- <a href="">Dashboard</a> -->
    
        </div>
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
        margin-left: 0px;
        padding-left: 20px;
        background-color: aliceblue;
        width: 630px;
        height: 551px;

        /* height: 600px; */
        margin-bottom: 0px;
        line-height: 0.8;
    }
    .B{
        font-family:  Times, serif;
        width: 670px;
        background-color: blanchedalmond;
        padding-left: 20px;


    }
    .B a{
        text-decoration: none;
        width: 200px;
        height: 30px;
        border: 1px solid;
        padding: 5px;
        border-radius: 3px;
        border-color: rgb(4, 238, 234);
        color: rgb(4, 238, 234);
        margin-left: 250px;
        font-family:  Times, serif;
        font-size: 20px;
    }
    .B h1{
            font-size: 50px;
            margin-left: 90px;
        }
    .B p{
        font-size: 20px;
        font-weight: bold;
        margin-left: 100px;

    }
    p{
        margin-left: 40px;
        font-family:  Times, serif;
        font-size: 20px;

    }

    .A h1{
        margin-bottom: 20px;
        margin-left: 70px;
        font-family:  Times, serif;
        font-weight: bold;

    }








    </style>
</html>
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
            <h1>Modifier une Filière</h1>
            <br>
            <form action="{{ route('filiere.update') }}" method="POST">
                @csrf
                <input type="text" name="id" style="display: none;" value="{{ $filiere->id }}">
                <label for="departement">Département</label> <br>
                <input type="text" class="form-control"  name="departement" id="departement" value="{{ $filiere->departement }}"><br>
                <label for="nom_filiere">Nom-Filière</label> <br>
                <input type="text" class="form-control"  name="nom_filiere" id="nom_filiere" value="{{ $filiere->nom_filiere }}" ><br>
                <label for="responsable">Responsable</label> <br>
                <input type="text" class="form-control"  name="responsable" id="responsable"  value="{{ $filiere->responsable }}"><br>
                <br>
                <button class="X" type="submit">Modifier</button>
            </form>
        </div>
        <div class="B">

            <h1 style="margin-top: 200px;font-weight: bold;">Welcome Admin !</h1>
            <p>Vous voullez consulter la liste des filières ajoutés ?</p>
            <a href="/liste-filieres">Consulter</a> 
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
        line-height: 1.1;
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
    .A label{
        margin-left: 40px;
        font-family:  Times, serif;
        font-size: 20px;

    }
    .A input{
        margin-left: 40px;
        width: 290px;
        font-family:  Times, serif;

    }
    .A h1{
        margin-bottom: 20px;
        margin-left: 80px;
        font-family:  Times, serif;
        font-weight: bold;

    }
    .A select{
        margin-left: 40px;
        width: 290px;
        height: 40px;
        font-family:  Times, serif;



    }
    .X{
        width: 200px;
        height: 40px;
        border: 1px solid;
        padding: 5px;
        border-radius: 10px;
        border-color: rgb(4, 238, 234);
        /* color: rgb(4, 238, 234); */
        background-color:rgb(4, 238, 234) ;
        color: white;
        font-family:  Times, serif;
        font-size: 20px;
        margin-left: 50px;

        /* margin-left: */

    }
    .X:hover {
        /* background-color: blue; */
        background-color: blanchedalmond;
        color: black;

    }
    .B a{
        background-color:rgb(4, 238, 234) ;
        color:white;
        border: 1px solid;
        border-radius: 5px;

    }







    </style>
</html>
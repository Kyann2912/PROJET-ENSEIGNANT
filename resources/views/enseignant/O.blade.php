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
            <h1>Modifier une Occupation </h1> <br>
            <form action="{{ route('occupation.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" style="display: none;"  value="{{ $occupation->id }}">
                <label for="nom_salle">Nom-Salle</label> <br>
                <input type="text" class="form-control"  name="nom_salle" id="" value="{{ $occupation->nom_salle }}"><br>
                <label for="">Occupation</label> <br>
                <select  class="form-select" name="occupation" id="occupation">
                    <option  value="IGL-L1" {{ $occupation->occupation == 'IGL-L1' ? 'selected' : '' }}>IGL-L2</option>
                    <option value="IGL-L2"  {{ $occupation->occupation == 'IGL-L2' ? 'selected' : '' }}>IGL-L2</option>
                    <option  value="IGL-L3" {{ $occupation->occupation == 'IGL-L2' ? 'selected' : '' }}>IGL-L3</option>
                    <option value="RIT-L1"  {{ $occupation->occupation == 'RIT-L1' ? 'selected' : '' }}>RIT-L1</option>
                    <option value="RIT-L2"  {{ $occupation->occupation == 'RIT-L2' ? 'selected' : '' }}>RIT-L2</option>
                    <option value="RIT-L3"  {{ $occupation->occupation == 'RIT-L3' ? 'selected' : '' }}>RIT-L3</option>
                    <option value="DROIT-L1" {{ $occupation->occupation == 'DROIT-L1' ? 'selected' : '' }}>DROIT-L1</option>
                    <option value="DROIT-L2" {{ $occupation->occupation == 'DROIT-L2' ? 'selected' : '' }}>DROIT-L2</option>
                    <option  value="DROIT-L3" {{ $occupation->occupation == 'DROIT-L3' ? 'selected' : '' }}>DROIT-L3</option>
                    <option  value="FBA-L1" {{ $occupation->occupation == 'FBA-L1' ? 'selected' : '' }}>FBA-L1</option>
                    <option value="FBA-L2" {{ $occupation->occupation == 'FBA-L2' ? 'selected' : '' }}>FBA-L2</option>
                    <option  value="FBA-L3" {{ $occupation->occupation == 'FBA-L3' ? 'selected' : '' }}>FBA-L3</option>
                </select> <br>
                <label for="">Heures</label> <br>
                <select  class="form-select" name="heure" id="">
                    <option  value="08h-10h" {{ $occupation->heure == '08h-10h' ? 'selected' : '' }}>08h-10h</option>
                    <option  value="08h-12h" {{ $occupation->heure == '08h-12h' ? 'selected' : '' }}>08h-12h</option>
                    <option  value="13h-15h" {{ $occupation->heure == '13h-15h' ? 'selected' : '' }}>13h-15h</option>
                    <option  value="08h-10h" {{ $occupation->heure == '15h-17h' ? 'selected' : '' }}>15h-17h</option>
                    <option  value="08h-12h" {{ $occupation->heure == '08h-12h' ? 'selected' : '' }}>08h-12h</option>
                    <option  value="13h-17h" {{ $occupation->heure == '13h-17h' ? 'selected' : '' }}>13h-17h</option>
                </select> <br>
                <label for="">Date</label> <br>
                <input type="date" class="form-control"  name="date" id="" value="{{ $occupation->date }}"><br>
                <br>
                <button class="X" type="submit">Modifier</button>
            </form>
        </div>
        <div class="B">

            <h1 style="margin-top: 200px;font-weight: bold;">Welcome Admin !</h1>
            <p>Vous voullez consulter la liste des occupations ajoutés ?</p>
            <a href="/liste-occupations">Consulter</a> 
    
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
        margin-left: 60px;
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
        margin-left:50px;

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
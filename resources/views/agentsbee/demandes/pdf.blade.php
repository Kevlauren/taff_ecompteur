<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    body {}


    .card {
        width: 100%;
        border: 1px solid #444;
        height: auto;

        border-radius: 5px;
        margin-bottom: 5px;


    }
    .card1 {
        width: 100%;
       
        height: auto;

        border-radius: 5px;
        margin-bottom: 5px;


    }

    .grid {
        display: grid;

    }

    h3 {
        text-transform: uppercase;
        text-align: center;
        font-size: 25px;
        font-weight: bold;
    }

    h4 {
        text-transform: uppercase;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
    }
</style>

<body>
    @foreach ($demandes as $demande)
        <div class="grid">
            <div class="card" style="background-color: red; color:#fff;padding: 5px;">
                <h3>Societe beninoise d'energie electrique</h3>

            </div>
            <hr style="background-color: #444; border:1px solid #444">

            <div class="card" style="padding-left: 10px; background-color:#777; color:#fff; padding: 5px;">
                <h4>Demande de devis de branchement N° : <span style="padding-left: 10px;">{{ $demande->id }}</span>
                </h4>
            </div>

            <div class="card1">

                <p style="font-size:20px; font-weight:bold; padding-left:10px;">Date de la demande :
                    <span style="font-weight:normal; font-size:17px;">{{ $demande->created_at }}</span>
                </p>
            </div>

            <div class="card1">
                <p style="font-size:20px; font-weight:bold; padding-left:10px;">Nom du demandeur :
                    <span style="font-weight:normal; font-size:17px;">{{ $demande->nom }}</span>
                </p>
            </div>

            <div class="card1">
                <p style="font-size:20px; font-weight:bold; padding-left:10px;">Prénoms du demandeur :
                    <span style="font-weight:normal; font-size:17px;">{{ $demande->prenom }}</span>
                </p>
            </div>

            <div class="card1">
                <p style="font-size:20px; font-weight:bold; padding-left:10px;">Adresse :
                    <span style="font-weight:normal; font-size:17px;">{{ $demande->localite }}</span>
                </p>
               
            </div>

            <div class="card1">
                <p style="font-size:15px; font-weight:100; padding-left:10px;">Désire que la SBEE établisse un devis de :
                    <ol>
                        <li>Branchement électrique 2 Fils                4 fils</li>
                        <li>Compteur additionnel électrique 2 Fils       4 fils</li>
                    </ol>
                </p>
               
            </div>


        </div>














        {{-- 
        <h2>{{ $demande->nom }}</h2>
        <h2>{{ $demande->prenom }}</h2>
        <h2>{{ $demande->demandeur_id }}</h2> --}}
    @endforeach



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</body>

</html>

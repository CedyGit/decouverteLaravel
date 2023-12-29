<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/attestation.css">
    <link rel="stylesheet" type="text/css" href="../users/assets/css/bootstrap/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>attestation</title>
</head>
<style>
    body{
        font-family: Arial, sans-serif;
    }
    h1{
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        margin-top: 50px;
    }
    p{
        font-size: 16px;
        line-height: 1.5;
        margin-bottom: 20px;
    }
    .container{
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    button{
        cursor: pointer;
    }
</style>
<body>
@foreach ($attestation as $employe)
    <div class="container">
        <h1>Attestation de travail</h1>
        <p>Je sousigné(e) {{ $employe->nom }} {{ $employe->prenom }}, {{ $employe->poste }} chez (Entreprise), 
            atteste que l'interessé(e) est embauché en tant que {{ $employe->status }} 
            depuis le {{ $employe->date_de_recrutement }}.</p>
        <p>Son salaire mensuel brut est de ...</p>
        <p>Cette attestation est delivree pour servir et valoir de ce que de droit.</p>
        <p>Fait a Antananarivo, le {{ date('d/m/y') }}.</p>
        <p style="float: right;">Le Directeur</p>
    </div>

    <button class="btn btn-success" onclick="window.print()" style="display: block; margin: 50px auto">Imprimer</button>
    <a href="{{ url('employe') }}"><button class="btn btn-info" style="display: block; margin: 20px auto">Les Employes</button></a>
@endforeach
   
</body>
</html>
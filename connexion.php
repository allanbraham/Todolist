<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');
if(isset($_POST['connexion'])){
    if(!empty($_POST['mail']) AND !empty($_POST['mdp'])){
        $mail = htmlspecialchars($_POST['mail']);
        $mdp = sha1($_POST['mdp']);

        $recupUser = $bdd->prepare('SELECT * FROM espace_membre WHERE email = ? AND mdp = ?');
        $recupUser->execute(array($mail, $mdp));
        
        if($recupUser->rowCount() > 0){
            $_SESSION['id'] = $recupUser->fetch()['id'];
            $_SESSION['mail'] = $mail;
            $_SESSION['mdp'] = $mdp;
            header('location: utilisateur.php');
        }else{
            echo "Votre email ou mot de passe est incorrect"; 
        }
    }else{
        echo "Veuillez compléter tous les champs...";
    }    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/connexion.css">
    <script src="./script.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">Todolist</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./inscription.php">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Connexion</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <div class="div">
        <h1>Connexion</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Adresse e-mail :</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="mail" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="inputPassword5" class="form-label">Mot de passe :</label>
                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="mdp" placeholder="********">
            </div>
            <button type="submit" name="connexion" class="btn btn-primary">Connexion</button>
        </form>    
    </div>
</body>
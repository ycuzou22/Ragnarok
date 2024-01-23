<?php
$connexion = new PDO('mysql:host=127.0.0.1;dbname=users_base1','root','');
if (isset($_POST['valider']))
{
    if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['password'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['password']);

        if (strlen($_POST['password'])<7) {
            $message = "votre mot de passe est trop court !";

        }elseif(strlen($nom)>25 || strlen($prenom)>50) {
            $message = "Nom ou Prenom trop long";
        }else{

            $testmail = $connexion->prepare("SELECT * FROM users WHERE email = ?");
            $testmail->execute(array($email));

            $controlmail = $testmail->rowCount();
            if ($controlmail==0){
                $insertion = $connexion->prepare("INSERT INTO users(nom,prenom,email,password)VALUES(?,?,?,?)");
                $insertion->execute(array($nom,$prenom,$email,$mdp));
                $message = "votre compte a bien été créé ! cliquez sur connexion pour vous connecter avec vos identifiants";
            } else {
                $message = 'un compte est déjà associé à cette adresse mail !';
            }
            
        }

    }else{
        $message = "Remplissez tous les champs !";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Connexion et inscription</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/inscription.css'>
</head>
<body class="bg-light">
    <div class="container ">
        <div class="row mt-5">
            <div class="col-lg-4 bg-white m-auto rounded-top">
                <h2 class="text-center"> Inscription</h2>
                <p class="text-center text-muted lead"> S'inscrire sur Ragna </p>

                <form method="POST" action="">
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                            <i class="fa fa-user">
                            </i> 
                        </span>
                        <input type="text" name = "nom" class="form-control" placeholder="Nom ">
                    </div>
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                            <i class="fa fa-user">
                            </i> 
                        </span>
                        <input type="text" name = "prenom" class="form-control" placeholder="Prénom ">
                    </div>
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                            <i class="fa fa-envelope">
                            </i> 
                        </span>
                        <input type="email" name = "email" class="form-control" placeholder="Email ">
                    </div>
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                            <i class="fa fa-lock">
                            </i> 
                        </span>
                        <input type="password" name = "password" class="form-control" placeholder="Mot de passe ">
                    </div>
                    <div class="d-grid">
                        <button type="buton" name = "valider" class="btn btn-success">S’inscrire</button>
                        <p class="text-center text-muted mt-3"> 
                            <i style="color:red">
                            <?php 
                            if (isset($message)) {
                                echo $message. "<br />";
                            }
                            ?> </i>
                            En cliquant sur S’inscrire, vous acceptez nos <a href="#">  Conditions générales</a>, notre <a href=""> Politique de confidentialité </a> et notre <a href="#">  Politique d’utilisation</a> des cookies. 
                        </p>
                        <p class="text-center">
                             Avez vous déjà un compte ?<a href="connexion.php"> Connexion </a>
                        </p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html> 
<?php
    include('fonction.php');
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $resultat = estConnecter($email, $mdp);
    if($resultat == 1) {
        header('Location: acceuil.php');
    } else {
        header('Location: index.php?error=1');
    }
?>
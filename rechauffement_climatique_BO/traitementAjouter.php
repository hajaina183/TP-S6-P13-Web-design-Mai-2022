<?php
    include('fonction.php');
    $date = $_POST['date'];
    $categorie = $_POST['categorie'];
    $lieu = $_POST['lieu'];
    $titre = $_POST['titre'];
    $resume = $_POST['resume'];
    $contenu = $_POST['contenu'];
    $photo = $_POST['photo'];
    $url = slugify($titre);
    insertActualite($categorie,$date,$lieu,$titre,$resume,$contenu,$url,$photo);
    header('Location: acceuil.php?page=ajouter.php');
?>
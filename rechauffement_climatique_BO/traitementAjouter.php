<?php
    include('fonction.php');
    $date = $_POST['date'];
    $categorie = $_POST['categorie'];
    $lieu = $_POST['lieu'];
    $titre = $_POST['titre'];
    $resume = $_POST['resume'];
    $contenu = $_POST['contenu'];
    $photo = $_FILES["photo"]["name"];
    $url = slugify($titre);

    $target_dir = "assets/img/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["photo"]["size"] > 500000) {
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        } else {
        }
    }

    insertActualite($categorie,$date,$lieu,$titre,$resume,$contenu,$url,$photo);
    header('Location: acceuil.php?page=ajouter.php');
?>
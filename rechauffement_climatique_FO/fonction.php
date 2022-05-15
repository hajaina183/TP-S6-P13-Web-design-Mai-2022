<?php
    function getCategories() {
        include('connexion.php'); 
        $data = $bdd->query("SELECT * FROM categorie")->fetchAll();
        return $data;
    }

    function getLieus() {
        include('connexion.php'); 
        $data = $bdd->query("SELECT * FROM lieu")->fetchAll();
        return $data;
    }

    function getActualites() {
        include('connexion.php'); 
        $data = $bdd->query("SELECT a.id id, date, titre, resume, contenu, url, photo, c.nom categorie, l.nom lieu from actualite a join categorie c on c.id = a.idCategorie join lieu l on l.id = a.idLieu 
        ")->fetchAll();
        return $data;
    }
    
    function insertActualite($categorie,$date,$lieu,$titre,$resume,$contenu,$url,$photo) {   
        include('connexion.php'); 
        $requete = "INSERT INTO actualite (idCategorie, date, idLieu, titre, resume, contenu, url, photo) VALUES (".$categorie.",'".$date."',".$lieu.",'".$titre."','".$resume."','".$contenu."','".$url."','".$photo."')";
        $res = $bdd->prepare($requete);
        $exec = $res->execute();
    }

    function modifierActualite($categorie,$date,$lieu,$titre,$resume,$contenu,$url,$photo,$id) {   
        include('connexion.php'); 
        $requete = "UPDATE actualite set idCategorie = ".$categorie.", date='".$date."', idLieu=".$lieu.", titre='".$titre."', resume='".$resume."', contenu='".$contenu."', url='".$url."', photo='".$photo."' where id = ".$id;
        $res = $bdd->prepare($requete);
        $exec = $res->execute();
    }

    function getActualite($id) {
        include('connexion.php'); 
        $requete = "SELECT * FROM actualite WHERE id = :id";
        $q = $bdd->prepare($requete);
        $q->execute(array(":id"=>$id));
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $r = $q->fetchAll();
        $rep = array();
        foreach($r as $rr) {
            $rep = $rr;
        }
        return $rr;
    }

    function estConnecter($email, $mdp) {
        include('connexion.php'); 
        $requete = "SELECT count(*) compte FROM login WHERE email = :email and mdp = :mdp";
        $q = $bdd->prepare($requete);
        $q->execute(array(":email"=>$email, ":mdp"=>$mdp));
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $r = $q->fetchAll();
        $rep = 0;
        foreach($r as $rr) {
            $rep = $rr['compte'];
        }
        return $rep;
    }

    function creerFichier($id,$url) {
        if (!file_exists($url.".html")) {
            $actualite = getActualite($id);
            setlocale(LC_TIME, "fr_FR", "French");
            $date = utf8_encode(strftime("%d %B %Y", strtotime($actualite['date'])));
            $nom_file = $url.".html";
            $contenu = "<title>".$actualite['titre']."</title>
            <h1 style='color:#022c5e'>".$actualite['titre']."</h1>
            <img src='../rechauffement_climatique_BO/assets/img/".$actualite['photo']."' class='img-fluid' alt='Responsive image'>
            <p><i>".$actualite['resume']."</i></p>
            <h5>".$actualite['contenu']."</h5>";
            $f = fopen($nom_file, "x+");
            fputs($f, $contenu);
            fclose($f);
        }
    }

    function slugify($text) {
        $divider = '-';
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, $divider);

        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

?>
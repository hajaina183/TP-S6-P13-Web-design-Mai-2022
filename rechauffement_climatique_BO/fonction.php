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
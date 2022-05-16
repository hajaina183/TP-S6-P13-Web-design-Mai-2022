<?php
    include('fonction.php');
    $actualite = getActualite($id);
    $categories = getCategories();
    $actualites = getActualites();
    $url = getUrl();
    $url_categorie = getUrlCategorie();
    $rep = 0;
    foreach($actualites as $a) {
        foreach($categories as $c) {
            if($a['url'] == $url && slugify($c['nom']) == $url_categorie) {
                $rep = 1;
            }
        }
    }
    if($rep == 1) {  
        $path = $actualite['url'].".html";
        if (file_exists($path)) {
            require($actualite['url'].".html");
        } else {
            creerFichier($id,$actualite['url']);
            require($actualite['url'].".html");
        }
    } else {
        include('404.html');
    }      
?>
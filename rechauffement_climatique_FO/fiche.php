<?php
    include('fonction.php');
    $actualite = getActualite($id);
    //creerFichier($id,$actualite['url']);
?>
<?php
    $path = $actualite['url'].".html";
    if (file_exists($path)) {
        require($actualite['url'].".html");
    } else {
        creerFichier($id,$actualite['url']);
        require($actualite['url'].".html");
    }      
?>
<?php
    include('fonction.php');
    $actualite = getActualite($id);
?>
<title><?php echo $actualite['titre']."-ITU"; ?></title>
<h1 style="color:#022c5e"><?php echo $actualite['titre']; ?></h1>
<img src="<?php echo "../rechauffement_climatique_BO/assets/img/". $actualite['photo'];?>" class="img-fluid" alt="Responsive image">
<p><i><?php echo $actualite['resume']; ?></i></p>
<h5><?php echo $actualite['contenu']; ?></h5>
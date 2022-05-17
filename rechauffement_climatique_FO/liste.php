<?php
    include('fonction.php');
    $actualites = getActualites();
?>
<link rel="stylesheet" href="assets/css/liste.css">
<h1 style="color:#022c5e";>Réchauffement climatique</h1>

<div class="container bcontent">
        <h2>Liste des actualités</h2>
        <hr />
        <?php foreach ($actualites as $actualite) { ?>
            <div class="card" style="width: 100%;">
                <div class="row no-gutters">
                    <div class="col-sm-3 mt-4 px-2">
                        <img class="card-img" src="<?php echo "../rechauffement_climatique_BO/assets/img/". $actualite['photo'];?>" alt="Suresh Dasari Card" height="170px">
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h3><a href="<?php echo slugify($actualite['categorie'])."/".$actualite['url']."-".$actualite['id'].".php";?>"><?php echo $actualite['titre'];?></a></h3>
                            <h5><?php echo $actualite['resume']; ?></h5>
                            <p><?php echo $actualite['contenu']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
        <?php } ?>
    </div>
<?php
    include('fonction.php');
    $categories = getCategories();
    $lieus = getLieus();
?>
<link href="css/formulaire.css" rel="stylesheet" />
<div class="container-fluid px-4">
    <h1 class="mt-4">Rechauffement Climatique</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Ajouter des actualités</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Formulaire d'ajout
        </div>
        <div class="container py-5">
        <!-- For demo purpose -->
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-6">Actualité</h1>
            </div>
        </div> <!-- End -->
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card ">
                    <div class="card-header">
                        <!-- Credit card form content -->
                        <div class="tab-content">
                            <!-- credit card info-->
                            <div id="credit-card" class="tab-pane fade show active pt-3">
                                <form role="form" action="traitementAjouter.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group"> <label for="username">
                                        <h6>Titre</h6>
                                        </label> <input type="text" name="titre" placeholder="Titre" required class="form-control "> 
                                    </div>
                                    <div class="form-group"> <label for="username">
                                        <h6>Résume</h6>
                                        </label> <input type="text" name="resume" placeholder="Résume" required class="form-control "> 
                                    </div>
                                    <div class="form-group"> <label for="username">
                                        <h6>Contenu</h6>
                                        </label> <input type="text" name="contenu" placeholder="Contenu" required class="form-control "> 
                                    </div>
                                    <div class="form-group"> <label for="username">
                                        <h6>Date</h6>
                                        </label> <input type="date" name="date" placeholder="Date" required class="form-control "> 
                                    </div>
                                    <div class="form-group"> <label for="username">
                                        <h6>Photo</h6>
                                        </label> <input type="file" name="photo" placeholder="Photo" required class="form-control "> 
                                    </div>
                                    <div class="form-group"> <label for="username">
                                        <h6>Catégorie</h6>
                                        <select name="categorie">
                                            <?php foreach ($categories as $categorie) { ?>
                                                <option value="<?php echo $categorie['id']; ?>"><?php echo $categorie['nom']; ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group"> <label for="username">
                                        <h6>Lieu</h6>
                                        <select name="lieu">
                                            <?php foreach ($lieus as $lieu) { ?>
                                                <option value="<?php echo $lieu['id']; ?>"><?php echo $lieu['nom']; ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="card-footer"> <input type="submit" class="subscribe btn btn-primary btn-block shadow-sm" value="Ajouter">
                                </form>
                            </div>
                        </div> <!-- End -->
                        <!-- End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/formulaire.js"></script>
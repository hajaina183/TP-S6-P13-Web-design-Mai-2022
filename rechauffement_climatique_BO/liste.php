<?php
    include('fonction.php');
    $actualites = getActualites();
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Rechauffement Climatique</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Liste des actualités</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Actualités
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th></th>
                        <th>Actualite</th>
                        <th width="100px">Date</th>
                        <th width="100px">Categorie</th>
                        <th width="100px">Lieu</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Actualite</th>
                        <th>Date</th>
                        <th>Categorie</th>
                        <th>Lieu</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($actualites as $actualite) { ?>
                        <tr>
                            <td><img src="<?php echo "assets/img/" . $actualite['photo'];?>" width="150px"/></td>
                            <td><a href="<?php echo "acceuil.php?page=modifier.php&&id=".$actualite['id']; ?>"><?php echo $actualite['titre']; ?></a></td>
                            <td><?php echo $actualite['date']; ?></td>
                            <td><?php echo $actualite['categorie']; ?></td>
                            <td><?php echo $actualite['lieu']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
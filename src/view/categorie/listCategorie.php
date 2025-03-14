
<div class="container mt-5">

<a href="?action=addCategorie" class="btn btn-success ">Ajouter</a>

<h3 class="mt-5">Liste des Catégories</h3>
<table class="table table-bordered mt-5">

        <tr>
            <th>ID</th>
            <td>Libelle</td>
            <th>Actions</th>
        </tr>
        <?php foreach($result as $r) :?>
            <tr>
                <td><?php echo $r->getId()  ?></td>
                <td><?php echo $r->getLibelle()  ?></td>
                <td>
                    <a href="?action=deleteCategorie&&id=<?php echo $r->getId() ?>" class="btn btn-danger">Supprimer</a>
                    <br>
                    <a href="?action=updateCategorie&&id=<?php echo $r->getId() ?>" class="btn btn-primary">Modifier</a>
                </td>
            </tr>
        <?php endforeach ?>

</table>
</div>
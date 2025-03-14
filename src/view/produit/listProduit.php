<?php
      
            $sql = "Select * from produit";
            $result = pg_query($connexion,$sql);

      

?>


<div class="container mt-5">
-
<a href="?action=addProduit" class="btn btn-success ">Ajouter</a>
<h3 class="mt-5">Liste des produits</h3>
<table class="table table-bordered mt-5">

        <tr>
            <th>ID</th>
            <td>Libelle</td>
            <th>Quantite</th>
            <th>Prix</th>
            <th>Catégorie</th>
            <th>Actions</th>
        </tr>
        <?php while($r = pg_fetch_assoc($result)) :?>
            <tr>
                <td><?php echo $r["id"]  ?></td>
                <td><?php echo $r["libelle"] ?></td>
                <td><?php echo $r["qt"]?></td>
                <td><?php echo $r["prix"]?></td>
                <td><?php echo $r["id_c"]?></td>

                <td>
                    <a href="?action=delete&&id=<?php echo $r["id"] ?>" class="btn btn-danger">Supprimer</a>
                    <br>
                    <a href="?action=updateProduit&&id=<?php echo $r["id"] ?>" class="btn btn-primary">Modifier</a>
                </td>
            </tr>
        <?php endwhile ?>

</table>
</div>
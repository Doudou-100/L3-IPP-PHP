
<?php

    $sql="SELECT * FROM categorie";
    $categories = pg_query($connexion,$sql);

    if(!empty($_POST) && isset($_POST["add"])){
        $libelle = $_POST["libelle"];
        $qt = $_POST["qt"];
        $prix = $_POST["prix"];
        $idc = $_POST['idc'];
        $sql = "INSERT INTO produit (libelle,qt,prix,id_c) values('$libelle',$qt,$prix,$idc)";
        $result = pg_query($connexion,$sql);

        if($result){
            echo "Données insérées avec succes";
            header("location:index.php");
        }else{
            echo "Erreur lors de l'insertion";
        }
    }

?>


<div class="container">
    <form action="#" method="POST">
        <label for="">Libelle</label>
        <input type="text" name="libelle" id="" class="form-control">
        <br>
        <label for="">Quantite</label>
        <input type="text" name="qt" id="" class="form-control">
        <br>
        <label for="">Prix Unitaire</label>
        <input type="text" name="prix" id="" class="form-control">
        <br>
        <label for="">Categorie</label>
        <select name="idc" id="" class="form-control">
            <?php while($c = pg_fetch_assoc($categories)) :?>
                <option value="<?= $c['id'] ?>"><?= $c['libelle'] ?></option>
            <?php endwhile ?>
        </select>
        <br>
        <button name="add" class="btn btn-primary">Ajouter</button>
    </form>
</div>

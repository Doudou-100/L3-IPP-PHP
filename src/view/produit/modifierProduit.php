

<?php
    
    $sql="SELECT * FROM categorie";
    $categories = pg_query($connexion,$sql);

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql ="Select * from produit where id=$id";
        $result = pg_fetch_assoc(pg_query($connexion, $sql));
    }
    
    if(isset($_POST["update"])){
        var_dump($_POST);
        $id  =$_POST["id"];
        $libelle = $_POST["libelle"];
        $qt = $_POST["qt"];
        $prix = $_POST["prix"];
        $idc = $_POST["idc"];

        $sql = "UPDATE produit set libelle = '$libelle', qt =$qt, prix=$prix, id_c=$idc where id =$id";
        pg_query($connexion,$sql);
        header("location:index.php");
    }


?>


<div class="container">

    <form action="#" method="POST">
        <input type="text" name="id" value="<?php echo $result["id"] ?>" hidden>
        <label for="">Libelle</label>
        <input type="text" name="libelle" id="" value="<?php echo $result["libelle"] ?>" class="form-control">
        <br>
        <label for="">Quantite</label>
        <input type="text" name="qt" id="" value="<?php echo $result["qt"] ?>" class="form-control">
        <br>
        <label for="">Prix Unitaire</label>
        <input type="text" name="prix" id="" value="<?php echo $result["prix"] ?>" class="form-control">
        <br>
        <label for="">Categorie</label>
        <select name="idc" id="" class="form-control" >
            <?php while($c = pg_fetch_assoc($categories)) :?>
                <option value="<?= $c['id'] ?>" <?php echo ($c['id'] == $result["id_c"] ) ? 'selected': ''  ?>><?= $c['libelle'] ?></option>
            <?php endwhile ?>
        </select>
        <br>
        <button name="update" class="btn btn-primary">Modifier</button>
    </form>
</div>

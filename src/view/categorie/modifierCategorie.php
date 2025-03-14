
<div class="container">
    <form action="?action=editCategorie" method="POST">
        <label for="">Libelle</label>
        <input type="text" name="id" value="<?php echo $result->getId() ?>" hidden>
        <input type="text" name="libelle" id="" value="<?php echo $result->getLibelle() ?>" class="form-control">
    
        <button name="update" class="btn btn-primary">Modifier</button>
    </form>
</div>
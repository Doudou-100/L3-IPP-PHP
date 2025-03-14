<?php
         if($_GET['action'] == 'addProduit'){
            require_once("./pages/produit/ajoutProduit.php");
        }
      
        if($_GET['action'] == 'updateProduit'){
            require_once("./pages/produit/modifierProduit.php");
        }
       
        if($_GET['action'] == 'listProduit'){
            require_once("./pages/produit/listProduit.php");
        }
        
        if($_GET['action']=="delete" ){

            $id=$_GET["id"];
            $sql="Delete from produit where id = $id";
            pg_query($connexion,$sql);
            header("location:index.php");

        }
      


?>
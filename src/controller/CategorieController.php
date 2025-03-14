<?php

Class CategorieController{


    function getAllCategorie(){
        global $model;
        $result = $model->getAll();
       require_once './src/view/categorie/listCategorie.php';
    }

    function createCategorie(){
        global $model;
        $libelle = $_POST['libelle'];
        $model->add($libelle);
        header("location:index.php?action=listCategorie");
    }

    function formulaireCategorie(){
        require_once("./src/view/categorie/ajoutCategorie.php");
    }
    function editCategorie(){
        global $model;
        $id = $_POST['id'];
        $libelle = $_POST['libelle'];
        $model->update($id,$libelle);
        header("location:index.php?action=listCategorie");
    }

    function updateCategorie(){
        global $model;
        $id = $_GET['id'];
        $result =  $model->getByid($id);
        require_once("./src/view/categorie/modifierCategorie.php");
    }

    function deleteCategorie(){
        global $model;
        $id=$_GET["id"];
        $model->delete($id);
        header("location:index.php?action=listCategorie");
    }

}
?>
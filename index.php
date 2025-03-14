
<?php
    require_once("bootstrap.php");
    require_once("./src/view/public/header.php");
    require_once("./src/view/public/navbar.php");
    require_once("./src/controller/CategorieController.php");
    require_once("./src/model/CategorieModel.php");
    require_once("./src/model/Categorie.php");

    $controlleur = new CategorieController();
    $model = new CategorieModel();


    if(isset($_GET['action'])){
        require_once './src/routes/CategorieRoute.php';
        require_once './src/routes/ProduitRoute.php';
      
    }

    
?>
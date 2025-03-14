<?php
     if($_GET['action'] == 'listCategorie'){
        $controlleur->getAllCategorie();
    }
    if($_GET['action'] == 'addCategorie'){
        $controlleur->formulaireCategorie();
    }

    if($_GET['action'] == 'createCategorie'){
        $controlleur->createCategorie();
    }
    if($_GET['action'] == 'updateCategorie'){
        $controlleur->updateCategorie();
    }
    if($_GET['action'] == 'editCategorie'){
        $controlleur->editCategorie();
    }
    if($_GET['action']=="deleteCategorie" ){
        $controlleur->deleteCategorie();
    }
?>
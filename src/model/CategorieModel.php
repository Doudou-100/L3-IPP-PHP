<?php

class CategorieModel{

    function getAll(){
        global $entityManager ;
        $result = $entityManager->getRepository(Categorie::class)->findAll();
        return $result;
    }

    function add($libelle){
        global $entityManager;
        $categorie = new Categorie($libelle);
        $entityManager->persist($categorie);
        $entityManager->flush();
    }
    function delete($id){
        global $entityManager;
        $categorie= $entityManager->getRepository(Categorie::class)->find($id);
        $entityManager->remove($categorie);
        $entityManager->flush();
    }

    function getByid($id){
        global $entityManager;
        $categorie= $entityManager->getRepository(Categorie::class)->find($id);
        return $categorie;
    }

    function update($id,$libelle){
        global $entityManager;
        $categorie = $this->getById($id);
        $categorie->setLibelle($libelle);
        $entityManager->flush();
    }

}

?>
<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'categorie')]
class Categorie
{
    /** @var int */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int|null $id = null;

    /** @var string */
    #[ORM\Column(type: 'string')]
    private string $libelle;


    function __construct($libelle){
        $this->libelle = $libelle;
    }

    public function getId(){
        return $this->id;
    }
    public function getLibelle(){
        return $this->libelle;
    }

    public function setLibelle(String $libelle){
        $this->libelle = $libelle;
    }

}
?>
<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'produit')]
class Produit
{
    /** @var int */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int|null $id = null;


    #[ORM\Column(type: 'string')]
    private string $nom;

    #[ORM\Column(type: 'string')]
    private string $description;    


    #[ORM\Column(type: 'integer')]
    private string $prix; 

    #[ORM\Column(type: 'string')]
    private string $qt;       

    
    #[ORM\ManyToOne(targetEntity: Categorie::class)]
    #[ORM\JoinColumn(nullable: false)]
    private Category $categorie;

    

}
?>
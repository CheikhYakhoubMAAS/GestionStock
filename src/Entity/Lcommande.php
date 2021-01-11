<?php

namespace App\Entity;

use App\Repository\LcommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LcommandeRepository::class)
 */
class Lcommande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Numc;


    /**
     * @ORM\Column(type="integer")
     */
    private $qte;

    /**
     * @ORM\Column(type="float")
     */
    private $pu;

    /**
     * @ORM\Column(type="integer")
     */
    private $tva;

     /**
     * @ORM\ManyToOne(targetEntity=Produit::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $produit;




    /**
     * @ORM\Column(type="string", length=50)
     */
    private $lig;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getNumc(): ?string
    {
        return $this->Numc;
    }

    public function setNumc(string $Numc): self
    {
        $this->Numc = $Numc;

        return $this;
    }

    public function getQte(): ?int
    {
        return $this->qte;
    }

    public function setQte(int $qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    public function getPu(): ?float
    {
        return $this->pu;
    }

    public function setPu(float $pu): self
    {
        $this->pu = $pu;

        return $this;
    }

    public function getTva(): ?int
    {
        return $this->tva;
    }

    public function setTva(int $tva): self
    {
        $this->tva = $tva;

        return $this;
    }
 
    public function getProduit(): ?produit
    {
        return $this->produit;
    }

    public function setProduit(?produit $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    
    
    public function getLig(): ?string
    {
        return $this->lig;
    }

    public function setLig(string $lig): self
    {
        $this->lig = $lig;

        return $this;
    }

   
}

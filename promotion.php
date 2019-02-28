<?php

namespace Moez\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity(repositoryClass="Moez\BackBundle\Repository\promotionRepository")
 */
class promotion
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPromotion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idPromotion;
    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;
    /**
     * @var float
     *
     * @ORM\Column(name="nombreVendu", type="float")
     */
    private $nombreVendu;
    /**
     * @ORM\ManyToOne(targetEntity="Moez\BackBundle\Entity\produit")
     */
    private $produit;
    public function __construct()
    {
        $this->dateDebutPromotion = new \Datetime();
        $this->DateFinPromotion = new \Datetime();
    }
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDebutPromotion", type="date")
     */
    private $dateDebutPromotion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFinPromotion", type="date")
     */
    private $DateFinPromotion;

    /**
     * @var int
     *
     * @ORM\Column(name="PourcentageRemise", type="integer")
     */
    private $pourcentageRemise;
    /**
     * @var string
     *
     * @ORM\Column(name="Etat", type="string")
     */
    private $etat;
    /**
     * @var string
     * @Assert\Image()
     * @ORM\Column(name="Image", type="string")
     */
    private $image;


    /**
     * Set dateDebutPromotion
     *
     * @param \DateTime $dateDebutPromotion
     *
     * @return promotion
     */
    public function setDateDebutPromotion($dateDebutPromotion)
    {
        $this->dateDebutPromotion = $dateDebutPromotion;

        return $this;
    }

    /**
     * Get dateDebutPromotion
     *
     * @return \DateTime
     */
    public function getDateDebutPromotion()
    {
        return $this->dateDebutPromotion;
    }
    /**
     * Set DateFinPromotion
     *
     * @param \DateTime $DateFinPromotion
     *
     * @return promotion
     */
    public function setDateFinPromotion($DateFinPromotion)
    {
        $this->DateFinPromotion = $DateFinPromotion;
        return $this;
    }

    /**
     * Get DateFinPromotion
     *
     * @return \DateTime
     */
    public function getDateFinPromotion()
    {
        return $this->DateFinPromotion;
    }

    /**
     * Set pourcentageRemise
     *
     * @param integer $pourcentageRemise
     *
     * @return promotion
     */
    public function setPourcentageRemise($pourcentageRemise)
    {
        $this->pourcentageRemise = $pourcentageRemise;

        return $this;
    }

    /**
     * Get pourcentageRemise
     *
     * @return int
     */
    public function getPourcentageRemise()
    {
        return $this->pourcentageRemise;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return promotion
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set produit
     *
     * @param \Moez\BackBundle\Entity\produit $produit
     *
     * @return promotion
     */
    public function setProduit(\Moez\BackBundle\Entity\produit $produit = null)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \Moez\BackBundle\Entity\produit
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Get idPromotion
     *
     * @return integer
     */
    public function getIdPromotion()
    {
        return $this->idPromotion;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return promotion
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return promotion
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set nombreVendu
     *
     * @param float $nombreVendu
     *
     * @return promotion
     */
    public function setNombreVendu($nombreVendu)
    {
        $this->nombreVendu = $nombreVendu;

        return $this;
    }

    /**
     * Get nombreVendu
     *
     * @return float
     */
    public function getNombreVendu()
    {
        return $this->nombreVendu;
    }
}
